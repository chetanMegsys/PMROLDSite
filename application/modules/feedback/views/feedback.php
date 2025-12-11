<div class="container-fluid bg-lgray">
    <div class="row">
        <div class="col-sm-12">
        <form id="feedbackform" name="feedbackform" action="" method="POST">
                   <?php
                      $name = $this->security->get_csrf_token_name(); 
                      $hash = $this->security->get_csrf_hash();
                      $_SESSION[$name] = $hash;
                      $report_id = isset($report_detail[0]['rep_id'])? $report_detail[0]['rep_id'] : 1;
                  ?>
                  <input type="hidden" id="csrf_test_name" name="<?=$name;?>" value="<?=$hash;?>" /> 
                  <input type="hidden" id="page_id" name="page_id" value="<?php echo $report_id; ?>">
                <input type="hidden" id="useful" name="useful" value="1">
            <p class="font18 mt-3 text-center">Thank you for taking time to visit our website, click like if you found the information on this page useful? <button id="ishelpful" style="background: #fff;padding:5px 15px;color: #fff;font-weight: 600;border:none;margin-left: 15px;border-radius: 10px;cursor: pointer;" aria-label="Yes (Was this helpful?)" data-value="5" type="submit">👍🏻</button><span id="response-msg" style="margin-left:5px;"></span></p>
        </form>
        </div>
    </div>
</div>
<script>
    function setFeedbackCookie() {
        const feedbackButton = document.getElementById('ishelpful');
        const feedbackForm = document.forms['feedbackform'];
        const responseMsg = document.getElementById('response-msg');

        feedbackButton.addEventListener('click', function() {
            // Set cookie with feedback value and SameSite attribute
            document.cookie = "feedback=useful; path=/; SameSite=None";

            // Disable the form
            for (let element of feedbackForm.elements) {
                element.disabled = true;
            }

            // Get form data
            const formData = new FormData(feedbackForm);
            formData.append('csrf_test_name', document.getElementById('csrf_test_name').value);
            formData.append('page_id', document.getElementById('page_id').value);
            formData.append('useful', 1); // Set the useful value

            // Send the form data using AJAX
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo WEBSITE_URL . "feedback/" . $report_id; ?>', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Disable the form elements
                    for (let element of feedbackForm.elements) {
                        element.disabled = true;
                    }

                    // Show a response message
                    responseMsg.innerHTML = " Thank you for your valuable feedback!";
                    responseMsg.style.color = "blue";
                } else {
                    // Show an error message
                    responseMsg.innerHTML = "There was an error submitting your feedback. Please try again.";
                    responseMsg.style.color = "red";
                }
            };
            xhr.send(formData);
        });
    }

    window.onload = setFeedbackCookie;
</script>