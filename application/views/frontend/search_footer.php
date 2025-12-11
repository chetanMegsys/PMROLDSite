<style>
    .highlight {
    background-color: yellow;
    font-weight: bold;
}
</style>
<script>
$(document).ready(function(){
    $("#s").keyup(function(){
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        
        var keyword = this.value.trim(); // Store the keyword directly

        if (keyword !== "" && keyword.length > 1) {
            $.ajax({
                url: "<?php echo WEBSITE_URL; ?>elastic_search",
                type: 'GET',
                data: {'keyword': keyword},
                success: function(e){
                    var data = jQuery.parseJSON(e);
                    var rep_data = data['reports'];

                    $("#suggestionsList").empty();
                    var sug = "<ul class='list-unstyled suggested-searches-ul'><li><p class='mb-0'><strong>Reports</strong></p></li>";
                    
                    // For each report, highlight the keyword
                    for (i = 0; i < rep_data.length; i++) {
                        var repName = rep_data[i]['rep_keyword'];
                        var catName = rep_data[i]['cat_name'];
                        
                        // Highlight the keyword in report name and category name
                        var highlightedRepName = highlightKeyword(repName, keyword);
                        var highlightedCatName = highlightKeyword(catName, keyword);
                        
                        sug += '<li><a href="<?php echo WEBSITE_URL; ?>market-research/' + rep_data[i]['rep_url'] + '.asp">' + highlightedRepName + " in <strong>" + highlightedCatName + "</strong></a> </li>";
                    }

                    sug += '</ul>';
                    $("#suggestionsList").html(sug);
                    $("#suggestionsBox").removeClass('d-none');
                    $(".deskSuggList").removeClass('d-none');
                }
            });
        } else {
            $("#suggestionsList").empty();
            $("#suggestionsBox").addClass('d-none');
            $(".deskSuggList").addClass('d-none');
        }
    }); 
});

// Function to highlight the keyword
function highlightKeyword(text, keyword) {
    var regex = new RegExp('(' + keyword + ')', 'gi'); // Create a case-insensitive regex to match the keyword
    return text.replace(regex, '<span class="highlight">$1</span>'); // Wrap the keyword with <span> for styling
}

</script>

