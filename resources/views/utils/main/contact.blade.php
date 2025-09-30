<section id="contact" class="contact-section py-16 px-8 text-center max-w-2xl mx-auto my-10">
    <h2 class="text-3xl mb-8 font-semibold">It's easy anything on your mind. Drop it here 👇</h2>
    <form id="contact-form" class="max-w-lg mx-auto flex flex-col gap-4">
        <input type="text" placeholder="Name" required
            class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white placeholder:text-white/70" />
        <input type="email" placeholder="Email" required
            class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white placeholder:text-white/70" />
        <input type="tel" placeholder="Phone" required
            class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white placeholder:text-white/70" />
        <textarea placeholder="Message" rows="5" required
            class="w-full px-4 py-3 bg-white/10 border border-white/30 rounded-xl text-white placeholder:text-white/70"></textarea>
        <button type="submit"
            class="px-8 py-3 bg-white/15 text-white border border-white/30 rounded-xl mt-2 self-center hover:bg-white/20 hover:-translate-y-1">Send
            Message</button>
    </form>
</section>

<script>
    document.getElementById('contact-form').addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Thank you for reaching out! We will get back to you soon.');
        this.reset();
    });
</script>