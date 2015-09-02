<div id="floorplans" class="section " data-scroll-index="4">
  <div class="hold-1200 clearfix">
    <div id="left">
      <div class="headline">
        <h2 class="head-type">
            Maximum Retail Impact
        </h2>
      </div>

      <ul id="plan-tabber" class="no-style">
        <li>
          <a class="active" href="#" data-type="floorplan">
            Ground Floorplan
          </a>
        </li>
        <li>
          <a href="#" data-type="elevation">
            Elevation Plan
          </a>
        </li>
      </ul>

      <div id="spec">
        <div class="copy-block">
          <h2>Specifications</h2>

          <div class="copy">
            <ul>
              <li>  8 Levels</li>
              <li>Up to 35,000 SF</li>
              <li>50 feet of street frontage </li>
              <li>100 feet of vertical branding potential </li>
              <li>Penthouse Terrace</li>
            </ul>
          </div>

        </div>

      </div>

    </div>


    <div id="spec-img">
      <img class="fp-img" src="assets/imgs/floorplan.jpg" />

    </div>

    <div class="hide" id="state-copy">
      <img class="late-load" data-src="assets/imgs/elevation-dt.png" />
      <img class="late-load" data-src="assets/imgs/elevation-mobile.png" />
      <div data-type="floorplan">
        <div class="copy">
          <ul>
            <li>  8 Levels</li>
            <li>Up to 35,000 SF</li>
            <li>50 feet of street frontage </li>
            <li>100 feet of vertical branding potential </li>
            <li>Penthouse Terrace</li>
          </ul>
        </div>
        <div class="img">
          <img class="fp-img" src="assets/imgs/floorplan.jpg" />
        </div>

      </div>

      <div data-type="elevation">
        <div class="copy">
          <ul>
          <li>  50 X 100 Ft Street Frontage Oppotunity</li>

          </ul>
        </div>
        <div class="img">
          <div class="elevation-img"></div>
        </div>

      </div>

    </div>

    <!-- DOWNLOADS -->

    <ul id="dl-list" class="no-style" data-scroll-index="6">
      <?php
      $dlList = array(
        array('Elevation<br/>Plan', '#'),
        array('TYPICAL<br/>FLOORPLAN', '#'),
        array('Brochure<br/>& Images', '#'),
        array('Top 12<br/>Highlights', '#')
      );
      foreach($dlList as $dl) {
        ?>
        <li>
          <a href="<?php echo $dl[1];?>" target="_blank">
            <span class="title"><?php echo $dl[0];?></span>
            <span class="icon">
              <?php include 'assets/imgs/download.svg';?>

            </span>

          </a>
        </li>

        <?php
      }

      ?>

    </ul>


  </div>
</div>