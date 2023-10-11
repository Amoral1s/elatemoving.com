<?php
/**
 Template Name:  Claims form
*/

get_header();
?>

<section class="quote-page claim-form page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
    <?php the_content(); ?>
    
    
  </div>
</section>




<?php
get_footer(); ?>

<div class="quote-page-form">
  <b class="title">Personal information</b>
  <div class="row">
    <div class="input third">
      [text y-name placeholder "Name"]
      <p>Name</p>
    </div>
    <div class="input third">
      [text y-email placeholder "Email"]
      <p>Email</p>
    </div>
    <div class="input third">
      [text* y-phone placeholder "Phone"]
      <p>Phone</p>
    </div>
  </div>
  <b class="title">Move details</b>
  <div class="row">
    <div class="input half">
      [text y-pick placeholder "Pick-Up address"]
      <p>Pick-Up address</p>
    </div>
    <div class="input half">
      [text y-dest placeholder "Destination address"]
      <p>Destination address</p>
    </div>
  </div>
  <div class="row">
    <div class="input third">
      [text y-job placeholder "Job number"]
      <p>Job number</p>
    </div>
    <div class="date third">
      <div class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5303 8.46967C18.2374 8.17678 17.7626 8.17678 17.4697 8.46967L12 13.9393L6.53033 8.46967C6.23744 8.17678 5.76256 8.17678 5.46967 8.46967C5.17678 8.76256 5.17678 9.23744 5.46967 9.53033L11.4697 15.5303C11.7626 15.8232 12.2374 15.8232 12.5303 15.5303L18.5303 9.53033C18.8232 9.23744 18.8232 8.76256 18.5303 8.46967Z" fill="white"/>
      </svg></div>
        [date y-loading placeholder "Shipment loading date"]
      <p>Shipment loading date</p>
    </div>
    <div class="date third">
      <div class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5303 8.46967C18.2374 8.17678 17.7626 8.17678 17.4697 8.46967L12 13.9393L6.53033 8.46967C6.23744 8.17678 5.76256 8.17678 5.46967 8.46967C5.17678 8.76256 5.17678 9.23744 5.46967 9.53033L11.4697 15.5303C11.7626 15.8232 12.2374 15.8232 12.5303 15.5303L18.5303 9.53033C18.8232 9.23744 18.8232 8.76256 18.5303 8.46967Z" fill="white"/>
      </svg></div>
        [date y-delivery placeholder "Shipment delivery date"]
      <p>Shipment delivery date</p>
    </div>
  </div>
  <b class="title">About your claim</b>
  <div class="row">
    <div class="input full">
      [textarea y-text placeholder "Information about your move"]
      <p>Information about your move</p>
    </div>
  </div>
  <b class="title">Attach documents/photos</b>
  <div class="file">
    <div class="icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.75 20C5.75 19.5858 6.08579 19.25 6.5 19.25L18.5 19.25C18.9142 19.25 19.25 19.5858 19.25 20C19.25 20.4142 18.9142 20.75 18.5 20.75L6.5 20.75C6.08579 20.75 5.75 20.4142 5.75 20Z" fill="white"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9697 3.46967C12.2626 3.17678 12.7374 3.17678 13.0303 3.46967L16.5303 6.96967C16.8232 7.26256 16.8232 7.73744 16.5303 8.03033C16.2374 8.32322 15.7626 8.32322 15.4697 8.03033L13.25 5.81066V16C13.25 16.4142 12.9142 16.75 12.5 16.75C12.0858 16.75 11.75 16.4142 11.75 16V5.81066L9.53033 8.03033C9.23744 8.32322 8.76256 8.32322 8.46967 8.03033C8.17678 7.73744 8.17678 7.26256 8.46967 6.96967L11.9697 3.46967Z" fill="white"/>
      </svg>
    </div>
    <b>Drop a file here or click to upload</b>
    <p>Maximum upload size: 6MB</p>
    [file file-741 limit:6000000 filetypes:pdf|docx|txt|jpeg|jpg]
  </div>
  [submit class:button class:button-accent "Submit my claim"]
</div>



