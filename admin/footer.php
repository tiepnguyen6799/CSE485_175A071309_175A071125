  <!--footer-->
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/material-dashboard.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/delete.js"></script>
  <script>
    function changeImg(input) {
      //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e) {
          //Thay đổi đường dẫn ảnh
          $('#avatar').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(document).ready(function() {
      $('#avatar').click(function() {
        $('#img').click();
      });
    });
  </script>
</body>

</html>