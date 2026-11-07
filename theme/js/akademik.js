 document.querySelectorAll('.toggle-btn').forEach(button => {
      button.addEventListener('click', () => {
        const card = button.parentElement;
        card.querySelector('.short').classList.toggle('hidden');
        card.querySelector('.full').classList.toggle('hidden');
        button.textContent = button.textContent === "Selengkapnya" ? "Sembunyikan" : "Selengkapnya";
      });
    });