<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
        <?php
        require_once 'controllers/controller.titles.php';
        $titles = new titlesController();
        echo $titles->getGlobalVariable('contactme'); ?>                
        </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback">An email is required.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" required />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback">A message is required.</div>
                    </div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl" id="submitButton" type="button" onclick="sendForm()">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
function sendForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;

    // Validar que todos los campos estén completos
    if (!name || !email || !phone || !message) {
        Swal.fire({
            icon: 'warning',
            title: 'Incomplete fields',
            text: 'Please fill in all the fields.',
            showConfirmButton: true
        });
        return; // Detener el envío si los campos no están completos
    }

    var formData = {
        name: name,
        email: email,
        phone: phone,
        message: message
    };

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "controllers/controller.contact.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (xhr.status === 200) {
            Swal.fire({
                icon: 'success',
                title: 'The information was saved succesfuly',
                showConfirmButton: false,
                timer: 1500
            });
        } else {
        }
    };

    xhr.send("name=" + encodeURIComponent(formData.name) +
             "&email=" + encodeURIComponent(formData.email) +
             "&phone=" + encodeURIComponent(formData.phone) +
             "&message=" + encodeURIComponent(formData.message));

    // Limpiar campos después del envío
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("message").value = "";
}
</script>

