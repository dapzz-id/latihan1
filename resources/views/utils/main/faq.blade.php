<section class="faq-section py-20">
  <h2 class="text-4xl text-center font-bold mb-10 text-stroke">FAQ</h2>

  <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden">
    <div
      class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15 transition-colors"
    >
      <span>Apakah platform ini bisa diakses di mobile dan desktop?</span>
      <span class="faq-arrow transition-transform">▼</span>
    </div>
    <div
      class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
    >
      <div class="px-5 pb-5">Ya, platform kami responsif di semua device.</div>
    </div>
  </div>

  <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden">
    <div
      class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15 transition-colors"
    >
      <span>Apakah platform ini cocok buat tech enthusiast saja?</span>
      <span class="faq-arrow transition-transform">▼</span>
    </div>
    <div
      class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
    >
      <div class="px-5 pb-5">Tidak, cocok untuk semua kalangan.</div>
    </div>
  </div>

  <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden">
    <div
      class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15 transition-colors"
    >
      <span>Apa yang ditampilkan dalam fitur Exhibition?</span>
      <span class="faq-arrow transition-transform">▼</span>
    </div>
    <div
      class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
    >
      <div class="px-5 pb-5">Karya digital pilihan pengguna.</div>
    </div>
  </div>

  <div class="faq-item bg-white/10 mb-4 rounded-xl overflow-hidden">
    <div
      class="faq-question p-5 cursor-pointer flex justify-between items-center hover:bg-white/15 transition-colors"
    >
      <span>Apakah fitur ini redirect ke halaman lain?</span>
      <span class="faq-arrow transition-transform">▼</span>
    </div>
    <div
      class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
    >
      <div class="px-5 pb-5">Sebagian fitur redirect ke halaman khusus.</div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll(".faq-question").forEach((q) => {
    q.addEventListener("click", () => {
      const parent = q.parentElement;
      const answer = parent.querySelector(".faq-answer");
      const arrow = q.querySelector(".faq-arrow");

      // Tutup semua dulu
      document.querySelectorAll(".faq-answer").forEach((ans) => {
        if (ans !== answer) {
          ans.style.maxHeight = null;
          ans.previousElementSibling.classList.remove(
            "text-white",
            "drop-shadow-[0_0_2px_white]"
          );
          ans.previousElementSibling
            .querySelector(".faq-arrow")
            .classList.remove("rotate-180");
        }
      });

      if (answer.style.maxHeight) {
        // kalau terbuka → tutup
        answer.style.maxHeight = null;
        q.classList.remove("text-white", "drop-shadow-[0_0_2px_white]");
        arrow.classList.remove("rotate-180");
      } else {
        // kalau tertutup → buka
        answer.style.maxHeight = answer.scrollHeight + "px";
        q.classList.add("text-white", "drop-shadow-[0_0_2px_white]");
        arrow.classList.add("rotate-180");
      }
    });
  });
</script>
