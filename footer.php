   

            </div>
        </div>
</div>

    <!-- /.container -->
    <div class="container">

         
        <footer >
            <div class="row myfooter">
                <div class="col-lg-12">
                    <p>Copyright &copy; Harlib 2016</p>
                </div> 
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->


    <script type='text/javascript' src="dependencies/js/jquery.min.js"></script>
    <script type='text/javascript' src="js/bootstrap-slider.js"></script>

    
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('' + recipient)
  modal.find('.modal-body input').val(recipient)
})
    </script>

</body>

</html>
