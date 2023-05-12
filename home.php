<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                    <?php 
                    $inbox = $conn->query("SELECT * FROM `conversation_list` where id in (SELECT conversation_id FROM `message_list` where to_user = '{$_settings->userdata('id')}') ")->num_rows;
                    ?>
                    <h1 class="text-gradient text-primary"><span id="state1" countto="70"><?= number_format($inbox) ?></span></h1>
                    <h5 class="mt-3">Inbox</h5>
                    <p class="text-lg h2 font-weight-normal text-dark"><span style="font-size:3rem" class="material-icons">mail</span></p>
                </div>
                <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                    <?php 
                    $sent = $conn->query("SELECT * FROM `conversation_list` where id in (SELECT conversation_id FROM `message_list` where from_user = '{$_settings->userdata('id')}') ")->num_rows;
                    ?>
                    <h1 class="text-gradient text-primary"><span id="state1" countto="70"><?= number_format($inbox) ?></span></h1>
                    <h5 class="mt-3">Sent</h5>
                    <p class="text-lg h2 font-weight-normal text-info"><span style="font-size:3rem" class="material-icons">send</span></p>
                </div>
                <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                    <h1 class="text-gradient text-primary"><span id="state1" countto="70"><?= number_format($unread) ?></span></h1>
                    <h5 class="mt-3">Unread</h5>
                    <p class="text-lg h2 font-weight-normal text-primary"><span style="font-size:3rem" class="material-icons">mark_email_unread</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-1">
    <div class="container">
        <h3 class="text-center fw-bolder">Welcome to <?= $_settings->info('name') ?></h3>
        <hr>
		<center>
        We are thrilled to have you join our community and we look forward to helping you connect with your friends, family, colleagues, and loved ones in a secure and private environment.
<br>
<br>
Hello and welcome to our Private Messaging System! and I am an AI language model here to assist you. Whether you have questions about how to use our platform, need help resolving an issue, or simply want to learn more about our features, I am always here to assist you in any way I can.
<br>
<br>
As you begin your journey with us, we want to assure you that your privacy and security are of utmost importance to us. We have implemented robust security measures to protect your personal information and ensure that all conversations on our platform are kept strictly confidential.

Whether you're looking to send private messages, share files, or have group conversations with multiple users, we have you covered. Our platform is designed to be intuitive and easy to use, making it simple for you to stay connected with your contacts from anywhere in the world.
<br>
<br>
In addition to our messaging features, we also offer a range of customization options to personalize your experience. You can choose from a variety of themes, fonts, and colors to make your chat window look and feel just the way you want it.

We also provide a range of tools to help you stay organized, including message search and filter options, message notifications, and more. With our help, you'll be able to keep track of all your conversations and never miss an important message again.
<br>
<br>
If you ever encounter any issues while using our platform, please don't hesitate to reach out to me or our support team for assistance. We are always here to help and we are committed to making your experience with us as smooth and enjoyable as possible.
<br>
<br>
Thank you for choosing our Private Messaging System, and we look forward to helping you stay connected with your contacts. Let's get started!

</center>
</div>
</section>