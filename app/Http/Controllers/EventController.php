<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use Carbon\Carbon;

class EventController extends Controller
{


    private function generateUniqueSlug(string $title, int $excludeId = null): string
    {
        $slug = Str::slug($title, '-');
        $originalSlug = $slug;
        $counter = 1;
        $query = Event::where('slug', $slug);
        if ($excludeId) { $query->where('id', '!=', $excludeId); }
        while ($query->exists()) {
            $counter++;
            $slug = $originalSlug . '-' . $counter;
            $query = Event::where('slug', $slug);
            if ($excludeId) { $query->where('id', '!=', $excludeId); }
        }
        return $slug;
    }

    public function showAllEvents()
    {
        $events = Event::orderBy('start_datetime', 'desc')->paginate(9);
        return view('event', compact('events'));
    }

    public function showEventDetail($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('contoh-event', compact('event'));
    }

    public function index() { $events = Event::latest()->get(); return view('event.index', compact('events')); }
    public function create() { return view('event.create'); }
    public function show(Event $event) { return view('event.show', compact('event')); }
    public function edit(Event $event) { return view('event.edit', compact('event')); }

    // === 1. FUNGSI STORE (VERSI AMAN - BASE_PATH) ===
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required|string|max:255',
            'start_datetime' => 'required|date',
            'end_datetime' => 'required|date|after_or_equal:start_datetime',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = 'event' . time() . '.' . $file->getClientOriginalExtension();
            
            $tujuan = base_path('storage/event_images');
            
            // Buat folder jika belum ada (Biar gak error)
            if (!File::isDirectory($tujuan)) {
                File::makeDirectory($tujuan, 0777, true, true);
            }
            
            $file->move($tujuan, $imageName);
        }

        Event::create([
            'title' => $request->title,
            'slug' => $this->generateUniqueSlug($request->title),
            'short_description' => $request->short_description,
            'content' => $request->content,
            'image' => $imageName,
            'location' => $request->location,
            'start_datetime' => $request->start_datetime,
            'end_datetime' => $request->end_datetime,
        ]);

        return redirect()->route('event.index')->with('add_sukses', 'Data berhasil ditambahkan.');
    }

    // === 2. FUNGSI UPDATE (VERSI AMAN - BASE_PATH) ===
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required|string|max:255',
            'start_datetime' => 'required|date',
            'end_datetime' => 'required|date|after_or_equal:start_datetime',
        ]);

        $data = $request->except(['image', 'slug']);
        
        if ($request->title !== $event->title) {
            $data['slug'] = $this->generateUniqueSlug($request->title, $event->id);
        }
        
        if ($request->hasFile('image')) {
            if ($event->image) {
                $gambar_lama = base_path('storage/event_images/' . $event->image);
                if (File::exists($gambar_lama)) {
                    File::delete($gambar_lama);
                }
            }

            $file = $request->file('image');
            $imageName = 'event' . time() . '.' . $file->getClientOriginalExtension();
            
            $tujuan = base_path('storage/event_images');
            $file->move($tujuan, $imageName);
            
            $data['image'] = $imageName;
        }

        $event->update($data);

        return redirect()->route('event.index')->with('edit_sukses', 'Data berhasil diperbarui.');
    }

    // === 3. FUNGSI DESTROY (VERSI AMAN - BASE_PATH) ===
    public function destroy(Event $event)
    {
        if ($event->image) {
            $gambar_lama = base_path('storage/event_images/' . $event->image);
            if (File::exists($gambar_lama)) {
                File::delete($gambar_lama);
            }
        }
        
        $event->delete();

        return redirect()->route('event.index')->with('delete_sukses', 'Data berhasil dihapus.');
    }
}