<script src="<?php echo WEBSITE_URL; ?>assets/js/jquery-3.2.1.js"></script>
<script src="<?php echo WEBSITE_URL; ?>assets/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){

    $("#s").keyup(function(){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        if(this.value!=""){
            $.ajax({
                url: "<?php echo WEBSITE_URL; ?>elastic_search",
                type:'GET',
                data:{'keyword': this.value},
                success: function(e){
                    var data =jQuery.parseJSON(e);
                    
                    rep_data = data['reports'];

                    $("#suggestionsList").empty();
                    var sug = "<ul class='list-unstyled suggested-searches-ul'><li><p><strong>Reports</strong></p></li>";
                    for(i=0;i<rep_data.length;i++){
                        sug += '<li><a href="<?php echo WEBSITE_URL; ?>market-research/' + rep_data[i]['rep_url'] + '.asp">' + rep_data[i]['rep_keyword'] + " in <strong>" + rep_data[i]['cat_name'] + "</strong></a> </li>";
                    }

                    sug += '</ul>';
                    $("#suggestionsList").html(sug);
					$("#suggestionsBox").removeClass('d-none');
					$(".deskSuggList").removeClass('d-none');
                }
            });
        }else{
            $("#suggestionsList").empty();
			$("#suggestionsBox").addClass('d-none');
			$(".deskSuggList").addClass('d-none');
        }
    }); 
});

$(function() {
  $('#s').on('keydown', function(e) {
   // console.log(this.value);
    if (e.which === 32 &&  e.target.selectionStart === 0) {
      return false;
    }  
  });
});

</script>