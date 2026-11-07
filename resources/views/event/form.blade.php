@csrf
<div class="card-body">
    <div class="form-group">
        <label for="title">Judul Event</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $event->title ?? '') }}" required>
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="start_datetime">Waktu & Tanggal Mulai</label>
                <input type="datetime-local" class="form-control @error('start_datetime') is-invalid @enderror" id="start_datetime" name="start_datetime" value="{{ old('start_datetime', isset($event) ? $event->start_datetime->format('Y-m-d\TH:i') : '') }}" required>
                @error('start_datetime')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="end_datetime">Waktu & Tanggal Selesai</label>
                <input type="datetime-local" class="form-control @error('end_datetime') is-invalid @enderror" id="end_datetime" name="end_datetime" value="{{ old('end_datetime', isset($event) ? $event->end_datetime->format('Y-m-d\TH:i') : '') }}" required>
                @error('end_datetime')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="location">Lokasi Event</label>
        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location', $event->location ?? '') }}" required>
        @error('location')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="short_description">Tempat & Tanggal Upload</label>
        <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="3" required>{{ old('short_description', $event->short_description ?? '') }}</textarea>
        @error('short_description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="content">Konten Lengkap</label>
        <textarea class="form-control tinymce @error('content') is-invalid @enderror" id="content" name="content" rows="10">{{ old('content', $event->content ?? '') }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="image">Gambar Event</label>
        @if(isset($event) && $event->image)
            <div class="mb-2">
                <img src="{{ asset('storage/event_images/' . $event->image) }}" alt="Current Image" style="max-width: 200px; height: auto;">
                <p class="text-muted small">Gambar saat ini. Upload baru untuk mengganti.</p>
            </div>
        @endif
        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('event.index') }}" class="btn btn-secondary">Kembali</a>
</div>