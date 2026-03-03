<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
	    <script src="assets/javascripts/jquery.fancybox.min.js"></script>
	    					

		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
                 <script src="assets/ckeditor/ckeditor.js"></script>
                <script type="text/javascript">
                        $(document).ready(function(){
                            $('.dashboard_link li:first').click(function(){
                               $(this).replaceWith( '<li class="col-md-6 col-lg-6"><label>View Past Invoices</label><a href="manage-invoice.php" title="View Past Invoices"><img src="assets/images/view-invoice.webp" alt="View Past Invoices" class="view_q"></a></li><li class="col-md-6 col-lg-6"><label>Create New Invoices</label><a href="add-invoice.php" title="Create New Invoices"><img src="assets/images/create-invoice.webp" alt="alt="Create New Invoices""></a></li>' );
                               $('.dashboard_link li:last').hide();
                            });
                             $('.dashboard_link li:last').click(function(){
                               $(this).replaceWith( '<li class="col-md-6 col-lg-6"><label>View Past Quotes</label><a href="manage-quote.php" title="View Past Quotes"><img src="assets/images/view-invoice.webp" alt="View Past Quotes" class="view_q"></a></li><li class="col-md-6 col-lg-6"><label>Create New Quotes</label><a href="add-quote.php" title="Create New Quotes"><img src="assets/images/create-invoice.webp" alt="Create New Quotes"></a></li>' );
                              $('.dashboard_link li:first').hide();
                            });
                           // $(".txtEditor").Editor();
                            $( "#TextBoxContainer" ).sortable();
                           $( ".datepicker" ).datepicker({ format: 'mm-dd-yyyy' }); 
                        });
                        
                        $(function () {
                            $("#btnAdd").bind("click", function () {
                                var div = $("<div />");
                                div.html(GetDynamicTextBox(""));
                                $("#TextBoxContainer").append(div);
                            });
                            
                            
                            $("body").on("click", ".remove", function () {
                                $(this).closest("div").remove();
                            });
                        });
                        
                        
                        function deleteOrder(x) {
                            //alert(x);
                            var r = confirm("Delete this order!");
                            if (r == true) {
                                  window.location = "delete-order.php?id="+x;
                            }
                        }
                        
                        function deleteLetterPad(x) {
                            //alert(x);
                            var r = confirm("Delete this order!");
                            if (r == true) {
                                  window.location = "delete-letterpad.php?id="+x;
                            }
                        }
                        
function GetDynamicTextBox(value) {
    
    var _html='';
    _html +='<div class="form-group">';
    _html +='<label class="col-md-1 control-label" for="inputDefault">Description</label>';
    _html +='<div class="col-md-4"><textarea class="form-control" name="desc[]" rows="3" ></textarea></div>';
    _html +='<div class="col-md-7 hidden-xs" style="padding: 46px;"></div>';
    _html +='<label class="col-md-1 control-label" for="inputDefault">Price</label>';
    _html +='<div class="col-md-4"><input type="text" name="price[]" ></div>';
    _html +='</div>';
    _html +='<input type="button" value="Remove" class="remove" />';
    return _html;
    //return '<input name = "DynamicTextBox" type="text" value = "' + value + '" />&nbsp;' +'<input type="button" value="Remove" class="remove" />'
}
                       
    function sendEmail(id,type) {
        $('#submit_link').click();
        $('#qnid').val(id);
        $('#quotation').val(type);
    } 
                </script>   
                
                
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		
		
                <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
                <script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
                <script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<!--<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>-->
	</body>
</html>