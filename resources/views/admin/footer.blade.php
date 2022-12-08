<script src="admin/vendors/js/vendor.bundle.base.js"></script>
<script src="admin/vendors/chart.js/Chart.min.js"></script>
<script src="admin/vendors/moment/moment.min.js"></script>
<script src="admin/vendors/daterangepicker/daterangepicker.js"></script>
<script src="admin/vendors/chartist/chartist.min.js"></script>
<script src="admin/js/off-canvas.js"></script>
<script src="admin/js/misc.js"></script>
<script src="admin/js/dashboard.js"></script>
<script src="https://kit.fontawesome.com/5b3710b119.js" crossorigin="anonymous"></script>
{{-- Bostrap Ori --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function previewImage(){
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
</body>
</html>