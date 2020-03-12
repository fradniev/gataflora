<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<section class="banner-template">
    <div class="banner-template-image">

    </div>
    <div class="banner-text-template">
        <div class="banner-template-top-light-text">
            NOS ENCANTARÍA TRABAJAR CONTIGO
        </div>
        <div class="banner-template-main-title">
            ¿CÓMO PODEMOS AYUDARTE?^^
        </div>
        <div class="banner-template-sub-title">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec metus eget libero accumsan laoreet sed vel nibh. Sed vitae malesuada urna. 
        </div>
    </div>
    <div class="banner-template-button-container">
        <button class="banner-template-button">
            ¿Empezamos ya?
        </button>
    </div>
    <div class="banner-template-logo-container">
        <div class="banner-template-instagram">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/banner-ins.png" alt="">
        </div>
        <div class="banner-template-twitter">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/banner-twitter.png" alt="">
        </div>
        <div class="banner-template-linkedin">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/banner-ln.png" alt="">
        </div>
    </div>
</section>
<section class="services">
    <div class="services-title">
        Nos encanta hablar^^
    </div>
    <div class="services-display">
        <div class="services-item">
            <div class="services-image">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/services-web.png" alt="">
            </div>
            <div class="services-name">
                ¿Nos vemos?
            </div>
            <div class="services-list-container">
                Lorem Ipsum<br>dolor sit amet
            </div>
            <div class="contact-button">
                <button class="contact-red-button">BUTTON</button>
            </div>
        </div>
        <div class="services-item">
            <div class="services-image">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/services-rrss.png" alt="">
            </div>
            <div class="services-name">
                ¿Hablamos?
            </div>
            <div class="services-list-container">
                Lorem Ipsum<br>dolor sit amet
            </div>
            <div class="contact-button">
                <button class="contact-red-button">BUTTON</button>
            </div>
        </div>
        <div class="services-item">
            <div class="services-image">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/services-design.png" alt="">
            </div>
            <div class="services-name">
                E-Mail
            </div>
            <div class="services-list-container">
                Lorem Ipsum<br>dolor sit amet
            </div>
            <div class="contact-button">
                <button class="contact-red-button">BUTTON</button>
            </div>
        </div>
        <div class="services-item">
            <div class="services-image">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/services-branding.png" alt="">
            </div>
            <div class="services-name">
                Dpto. Comercial
            </div>
            <div class="services-list-container">
                Lorem Ipsum<br>dolor sit amet
            </div>
            <div class="contact-button">
                <button class="contact-red-button">BUTTON</button>
            </div>
        </div>
    </div>
</section>
<section class="form">
    <div class="form-title">
        CUÉNTANOS TU PROYECTO^^
    </div>
    <div class="form-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec metus eget libero accumsan laoreet sed vel nibh. Sed vitae malesuada urna. 
    </div>
    <div class="form-container">
        <form action="">
            <div class="form-side-by-side">
                <input name="name" class="form-name" onfocus="if (this.value=='Nombre*') this.value = ''" onblur="if (this.value=='') this.value = 'Nombre*'" type="text" value="Nombre*">
                <input name="phone" class="form-phone" onfocus="if (this.value=='Teléfono*') this.value = ''" onblur="if (this.value=='') this.value = 'Teléfono*'" type="text" value="Teléfono*">
                <input name="email" class="form-email" onfocus="if (this.value=='E-mail*') this.value = ''" onblur="if (this.value=='') this.value = 'E-mail*'" type="text" value="E-mail*">
                <input name="budget" class="form-budget" onfocus="if (this.value=='Presupuesto*') this.value = ''" onblur="if (this.value=='') this.value = 'Presupuesto*'" type="text" value="Presupuesto*">
            </div>
            <textarea name="project" class="form-project" onfocus="if (this.value=='Describe tu proyecto') this.value = ''" onblur="if (this.value=='') this.value = 'Describe tu proyecto'" type="text" value="Describe tu proyecto">Describe tu proyecto</textarea>
        </form>
    </div>
    <div class="contact-logo">
        <div class="motto-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/logo.png" alt="">
        </div>
    </div>
</section>
<?php get_footer(); ?>