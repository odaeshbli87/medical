<footer class="bg-danger-subtle p-3">
    <p class="text-center fw-bold">&copy;كل الحقوق محفوظة</p>
</footer>
<?php if(isset($conn)){ 
        mysqli_close($conn);
        }?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/datapicker.js"></script>
<!--    <script src="js/html2pdf.js"></script>-->
    <script src="js/main.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>