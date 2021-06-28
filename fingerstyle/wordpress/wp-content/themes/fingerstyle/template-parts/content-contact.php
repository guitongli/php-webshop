<?php if (isset($_POST['submit-contact'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = 'guitong.lee.contact@gmail.com';
    $headers = 'From:' . $mailFrom;
    $txt = $name . 'sent you the following message: \n\n' . $message;
    mail($mailTo, $subject, $txt, $headers);
    header('Location:' . get_page_link() . '?mailsend');
    echo 'sent';
}
?>
 

<div class="contact p-3">
			<h1 class="headline text-center">Get in Touch</h1>
			<div class="contact-container d-flex justify-content-around">
				<div class="contact-head col-sm-2 pb-5">
						
                
                <img src="<?php echo get_template_directory_uri()?>/assets/images/color-logo.jpeg" class="img-fluid">
					
<p class = 'text-center mt-5'>Address: China First Mall B 9D, Chaoyang Road, Bejiing</p> </div>
				<form action="" class="form-row col-sm-7 pb-5">
					<div class=" d-flex flex-column">
<input type="text" class="form-control m-2" name='name' placeholder='Full Name'>

						<input type="email" name='email' class="form-control m-2" placeholder="Email*" />
						<input type="url" name='url' class="form-control  m-2" placeholder="URL" />
<input type="text" name='subject' class="form-control  m-2" placeholder='Subject'>

                        <input type="text" class="form-control  m-2" placeholder="Message*" name="message" />
						<button type="submit" class="btn btn-primary mx-2"  name='submit-contact'>
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
