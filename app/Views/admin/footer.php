</div>
    </main>






</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/js/admin.js') ?>"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        <?php if (session()->getFlashdata('pesan')): ?>
            const flashdata = <?= json_encode(session()->getFlashdata('pesan')) ?>;
            Swal.fire({
                title: flashdata.title,
                text: flashdata.text,
                icon: flashdata.icon,
                confirmButtonText: 'OK'
            });
        <?php endif; ?>
    });
</script>

</html>