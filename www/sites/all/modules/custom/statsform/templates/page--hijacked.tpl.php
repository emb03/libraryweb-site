  <html>

    <head>

      <meta charset="utf-8">
      <title>JS Bin</title>

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pickadate@3.5.6/lib/picker.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pickadate@3.5.6/lib/picker.date.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pickadate@3.5.6/lib/picker.time.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.0/dist/semantic.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-taphold@1.0.0/taphold.min.js"></script>
      <script type="text/javascript" src="/<?php print( $page['sf_path'] ); ?>/templates/custom.tap.js"></script>

      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pickadate@3.5.6/lib/themes/default.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pickadate@3.5.6/lib/themes/default.date.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pickadate@3.5.6/lib/themes/default.time.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.0/dist/semantic.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.css">
      <link rel="stylesheet" type="text/css" src="/<?php print( $page['sf_path'] ); ?>/templates/custom.tap.css">
      <link rel="stylesheet" type="text/css" href="/<?php print( $page['sf_path'] ); ?>/templates/responsive-full-background-image.css">
    
      <script type='text/javascript'>
        $(window).load(function(){
          var bcolor = "show huge ui blue button";

        });
      </script>

      <style id="jsbin-css">
        @charset "UTF-8";

        /* Global Styles */
        body {
          margin: 0px;
          padding: 9px;
          font-family: Helvetica;
          font-size: 16px;
        }

        #black {
          background-color: black;
          color: white;
        }
          .ui.container {
          height: auto;
        }
          .ui.main.container{
          background-color: rgba(255, 250, 243, 0.5);
          border-radius: 8px;
        }
          .ui.equal.width.center.aligned.grid {
          height: 100%;
        }

        a.column {
          font-size: 50px;
          line-height: 80px;
        }

        .ui.secondary.inverted.menu {
          background-color: black;
          font-size: 20px;
        }

        .inverted.segment {
          height: 80px;
        }

        .ui.negative.button, .ui.negative.button:hover {
          background-color: #CF322D;
        }

        .ui.positive.button, .ui.positive.button:hover {
          background-color: #CF322D;
        }

        .shift {
          width: 100%;
          height: 50%;
          background-color: #68863F;
          font-size: 30px;
          vertical-align: middle;
        }

        .actions {
          margin: 0px;
          padding-bottom: 8px;
        }
        .ui.fluid.large.label {
          margin: 0px;
          padding-bottom: -5px;
        }
        .huge.icon {
          margin: 4px;
          padding-bottom: 0px;
        }
        .huge.pageTitle {
          margin: 4px;
          padding-bottom: 0px;
          font-family: Palatino;
          font-size: 38px;
        }
        .large.pageTitle {
          background-color: white;
          margin: 4px;
          padding-top: 10px;
          padding-bottom: 10px;
          padding-left: 10px;
          padding-right: 10px;
          border-radius: 8px;
          font-family: Palatino;
          font-size: 18px;
        }
        .huge.loginText {
          margin: 4px;
          padding-bottom: 0px;
          font-family: Palatino;
          font-size: 10px;
          font-weight: bold;
        }
        .show.ui.positive.button.label {
          margin: 0px;
          padding-left: 34px;
        }

        /*-------------------
              And Sizes
        --------------------*/

        .ui.mini.buttons .button,
        .ui.mini.buttons .and,
        .ui.mini.button {
          font-size: 0.71428571rem;
        }

        .ui.tiny.buttons .button,
        .ui.tiny.buttons .and,
        .ui.tiny.button {
          font-size: 0.85714286rem;
        }

        .ui.small.buttons .button,
        .ui.small.buttons .and,
        .ui.small.button {
          font-size: 0.92857143rem;
        }

        .ui.buttons .button,
        .ui.buttons .and,
        .ui.button {
          font-size: 1rem;
        }

        .ui.large.buttons .button,
        .ui.large.buttons .and,
        .ui.large.button {
          font-size: 1.14285714rem;
        }

        .ui.big.buttons .button,
        .ui.big.buttons .and,
        .ui.big.button {
          font-size: 1.28571429rem;
        }

        .ui.huge.buttons .button,
        .ui.huge.buttons .and,
        .ui.huge.button {
          font-size: 1.42857143rem;
        }

        .ui.massive.buttons .button,
        .ui.massive.buttons .and,
        .ui.massive.button {
          font-size: 1.71428571rem;
        }



        /*-------------------
              And Buttons
        --------------------*/

        .ui.huge.fitted.checkbox {
          position: relative;
          vertical-align: middle;
        }

        .ui.buttons .and {
          position: relative;
          width: 0.3em;
          height: 2.57142857em;
          z-index: 3;
        }

        .ui.buttons .and:before {
          position: absolute;
          text-align: center;
          border-radius: 500rem;
          content: 'and';
          top: 50%;
          left: 50%;
          background-color: #ffffff;
          text-shadow: none;
          margin-top: -0.89285714em;
          margin-left: -1.1em;
          width: 2.2em;
          height: 1.78571429em;
          line-height: 1.78571429em;
          color: rgba(0, 0, 0, 0.4);
          font-style: normal;
          font-weight: bold;
          box-shadow: 0px 0px 0px 1px transparent inset;
          z-index: 4444;
        }

        .ui.buttons .and[data-text]:before {
          content: attr(data-text);
        }

        /* Fluid And */

        .ui.fluid.buttons .and {
          width: 0em !important;
        }

        .ui.fluid.buttons .and:after {
          display: none;
        }
        .ui.borderless.column {
          background-color: rgba(255, 255, 255, 0.0);
          border-color: black;
          border-radius: 8px;
          border: 1px;
          margin-bottom: 15px;
        }
        .ui.input.right.cc1.icon {
          background-color: rgba(255, 255, 255, 0.0);
          border-color: black;
          border-radius: 8px;
          border: 1px;
          top: -50%;
          left: 20%;
        }
        .ui.input.right.cc2.icon {
          background-color: rgba(255, 255, 255, 0.0);
          border-color: black;
          border-radius: 8px;
          border: 1px;
          top: -50%;
          left: 22%;
        }
        .ui.message {
          background-color: rgba(255, 255, 255, 0.0);
          border-style: none;
          border-style: hidden;
          border-radius: 8px;
        }
        .ui.sfWhite.button {
          background-color: rgba(255, 255, 255, 1.0);
        }
        .ui.combo.sfWhite.button {
          background-color: rgba(244, 244, 244, 1.0);
        }
        .ui.buttons {
          background-color: rgba(255, 255, 255, 0.7);
          border-radius: 8px;
        }
        .ui.tb.buttons {
          background-color: rgba(255, 255, 255, 0.01);
          border-radius: 8px;
        }
        .ui.button:hover {
          font-weight: bold;
          font-color: #ffffff;
        }
        .ui.tabular.menu {
          border-style: hidden;
        }
        #grid1 {
          border: 2px solid rgba(242, 242, 242, 0.3);
        }
        #grid2 {
          border: 2px solid rgba(255, 255, 255, 0.9);
          border-radius: 0px;
        }
        #grid3 {
          font-weight: lighter;
        }

        .dimmable.dimmed > .dimmer {
          overflow: auto !important;
        }

        .ui.withCheckDivTouchOn {
          background-color: rgba(50, 132, 191, 0.8);
        }

        .ui.withCheckDivTouch {
          background-color: rgba(255, 255, 255, 1.0);
        }

        input[type=checkbox].css-checkbox {
         position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
        }

        input[type=checkbox].css-checkbox + label.css-label {
          padding-left:35px;
          height:30px; 
          display:inline-block;
          line-height:30px;
          background-repeat:no-repeat;
          background-position: 0 0;
          font-size:30px;
          vertical-align:middle;
          cursor:pointer;
        }

        input[type=checkbox].css-checkbox:checked + label.css-label {
          background-position: 0 -30px;
        }

        label.css-label {
          background-image:url(http://csscheckbox.com/checkboxes/u/csscheckbox_f60067e68146be412873f96f1d2458cd.png);
          -webkit-touch-callout: none;
          -webkit-user-select: none;
          -khtml-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        textarea{
          resize:none;
          width:100%;
          height:100%;
          border-color: black;
          border-radius: 8px;
          border: 1px black solid;
          margin-bottom: 1px;
          margin: 0px;
          padding: 9px;
        }

        #exboxQuestionTopic:focus{
          position:absolute;
          z-index:1;
        }

        #exboxCourseSection:focus{
          position:absolute;
          z-index:1;
        }
        .ui.border.padded.basic.segment.left.floated {
          background-color: rgba(255, 255, 255, 0.0);
          border-color: black;
          border-radius: 8px;
          border: 1px black solid;
          margin-bottom: 1px;
        }
        .ui.logout.xlabel {
          font-size:20px;
          vertical-align:middle;
        }
      </style>

    </head>
    <body>

      <!-- MODALS START --------------------------------------------------------------------------------------- -->
      <!-- MODAL #1 - Library Units -->
      <!-- MODAL #1 - Library Units -->
      <!-- MODAL #1 - Library Units -->
      <div class="ui sp united large modal" id="libraryUnits">

        <div class="header">
          Please select a main location
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Arts">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Arts</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/arts_welcome.jpg">
                      <div class="ui large label">
                        <center>Arts</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Biomed">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Biomed</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/biomed_welcome.jpg">
                      <div class="ui large label">
                        <center>Biomed</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Clark Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Clark Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/clark reading room1-large.jpg">
                      <div class="ui large label">
                        <center>Clark Library</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Powell">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Powell</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/DAY4_SHOT1_JANSSSTEPS-49_r_cmyk_0.jpg">
                      <div class="ui large label">
                        <center>Powell</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Digital Library Program">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Digital Library Program</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/ucla_digital-program.jpg">
                      <div class="ui large label">
                        <center>Digital Library Program</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="East Asian">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">East Asian</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/eal_welcome_0.jpg">
                      <div class="ui large label">
                        <center>East Asian</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Library Special Collections">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Library Special Collections</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/photo_2.JPG">
                      <div class="ui large label">
                        <center>Library Special Collections</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Law">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Law</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/law2.jpg">
                      <div class="ui large label">
                        <center>Law</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Management">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Management</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/rosenfeld.jpg">
                      <div class="ui large label">
                        <center>Management</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Music">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Music</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/musicmss_026_010.jpg">
                      <div class="ui large label">
                        <center>Music</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Rieber Hall">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Rieber Hall</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/RieberHall.jpg">
                      <div class="ui large label">
                        <center>Rieber Hall</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="SEL">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">SEL</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/selMathSciences_welcome.jpg">
                      <div class="ui large label">
                        <center>SEL</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="SRLF">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">SRLF</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/srlf_welcome2_0.jpg">
                      <div class="ui large label">
                        <center>SRLF</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="actions">
                <div class="ui approve button" data-value="Social Science Data Archive">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Social Science Data Archive</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/rolphe.jpg">
                      <div class="ui large label">
                        <center>Social Science Data Archive</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="YRL">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">YRL</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/yrl.jpg">
                      <div class="ui large label"><center>YRL</center></div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
            <!-- albums END -->

          </div>
          <!-- library choice END -->

        </div>
        <!-- content END -->

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #1 - Library Units - END-->



      <!-- MODAL #2 - Service Points -->
      <!-- MODAL #2 - Service Points -->
      <!-- MODAL #2 - Service Points -->
      <div class="ui united large modal" id="unitServicePoints">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="The Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>The Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="A-Level Service Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">A-Level Service Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>A-Level Service Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Science and Engineering Library Service">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Science and Engineering Library Service</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>Science and Engineering Library Service</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="The Information Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Information Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>The Information Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="The Cashier Window">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Cashier Window</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>The Cashier Window</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Phone Answering Station">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Phone Answering Station</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>Phone Answering Station</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #2 - Service Points END -->

      <!-- MODAL #3 - Service Points Arts -->
      <!-- MODAL #3 - Service Points Arts -->
      <!-- MODAL #3 - Service Points Arts -->
      <div class="ui united large modal" id="unitArts">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Arts Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Arts Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Arts-Circulation-Desk.jpg">
                      <div class="ui large label">
                        <center>Arts Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Off-Desk.jpg">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Arts-Reference.jpg">
                      <div class="ui large label">
                        <center>Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #3 - Service Points Arts - END -->

      <!-- MODAL #4 - Service Points Biomed -->
      <!-- MODAL #4 - Service Points Biomed -->
      <!-- MODAL #4 - Service Points Biomed -->
      <div class="ui united large modal" id="unitBiomed">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Biomed Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Biomed Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>Biomed Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Biomed Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Off-Desk.jpg">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Biomed Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Ref-Desk.jpg">
                      <div class="ui large label">
                        <center>Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #4 - Service Points Biomed - END -->

      <!-- MODAL #5 - Service Points Library Special Collections -->
      <!-- MODAL #5 - Service Points Library Special Collections -->
      <!-- MODAL #5 - Service Points Library Special Collections -->
      <div class="ui united large modal" id="unitLibrarySpecialCollections">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="LSC Biomed">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">LSC Biomed</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/LSC-Biomed.jpg">
                      <div class="ui large label">
                        <center>LSC Biomed</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="LSC Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">LSC Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Off-Desk.jpg">
                      <div class="ui large label">
                        <center>LSC Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="actions">
                <div class="ui approve button" data-value="LSC YRL Reference desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">LSC YRL Reference desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Ref-Desk.jpg">
                      <div class="ui large label">
                        <center>LSC YRL Reference desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #5 - Service Points Library Special Collections - END -->

      <!-- MODAL #6 - Service Points Clark Library -->
      <!-- MODAL #6 - Service Points Clark Library -->
      <!-- MODAL #6 - Service Points Clark Library -->
      <div class="ui united large modal" id="unitClark">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Office">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Office</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Clark-Office.jpg">
                      <div class="ui large label">
                        <center>Office</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Clark-ReferenceDesk.jpg">
                      <div class="ui large label">
                        <center>Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #6 - Service Points Clark Library - END -->

      <!-- MODAL #7 - Service Points Powell -->
      <!-- MODAL #7 - Service Points Powell -->
      <!-- MODAL #7 - Service Points Powell -->
      <div class="ui united large modal" id="unitPowell">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Entrance Foyer">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Entrance Foyer</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Powel-Entrance-Foyer.jpg">
                      <div class="ui large label">
                        <center>Entrance Foyer</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Inquiry Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Inquiry Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/powell-inquiry-desk.jpg">
                      <div class="ui large label">
                        <center>Inquiry Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="InqLab1 (research and writing help)">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">InqLab1 (research and writing help)</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/InqLab1-Powell.jpg">
                      <div class="ui large label">
                        <center>InqLab1 (research and writing help)</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Off-Desk.jpg">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #7 - Service Points Powell - END -->

      <!-- MODAL #8 - Service Points Digital Library Program -->
      <!-- MODAL #8 - Service Points Digital Library Program -->
      <!-- MODAL #8 - Service Points Digital Library Program -->
      <div class="ui united large modal" id="unitDigitalLibraryProgram">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="DLP Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Off-Desk.jpg">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #8 - Service Points Digital Library Program - END -->

      <!-- MODAL #9 - Service Points East Asian -->
      <!-- MODAL #9 - Service Points East Asian -->
      <!-- MODAL #9 - Service Points East Asian -->
      <div class="ui united large modal" id="unitEastAsian">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="East Asian Information Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Information Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/EastAsian-InformationDesk.jpg">
                      <div class="ui large label">
                        <center>The Information Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="East Asian Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Off-Desk.jpg">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #9 - Service Points East Asian - END -->

      <!-- MODAL #10 - Service Points Law -->
      <!-- MODAL #10 - Service Points Law -->
      <!-- MODAL #10 - Service Points Law -->
      <div class="ui united large modal" id="unitLaw">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Law Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Law Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Law-Circulation.jpg">
                      <div class="ui large label">
                        <center>Law Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Law Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Ref-Desk.jpg">
                      <div class="ui large label">
                        <center>Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #10 - Service Points Law - END -->

      <!-- MODAL #11 - Service Points Management -->
      <!-- MODAL #11 - Service Points Management -->
      <!-- MODAL #11 - Service Points Management -->
      <div class="ui united large modal" id="unitManagement">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Management Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Management Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>Management Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Management Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Off-Desk.jpg">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Management Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Ref-Desk.jpg">
                      <div class="ui large label">
                        <center>Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #11 - Service Points Management - END -->

      <!-- MODAL #12 - Service Points Music -->
      <!-- MODAL #12 - Service Points Music -->
      <!-- MODAL #12 - Service Points Music -->
      <div class="ui united large modal" id="unitMusic">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Music Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Music Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>Music Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Music Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Off-Desk.jpg">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Music Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Ref-Desk.jpg">
                      <div class="ui large label">
                        <center>Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #12 - Service Points Music - END -->

      <!-- MODAL #13 - Service Points Rieber Hall -->
      <!-- MODAL #13 - Service Points Rieber Hall -->
      <!-- MODAL #13 - Service Points Rieber Hall -->
      <div class="ui united large modal" id="unitRieberHall">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Rieber Hall 115">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Rieber Hall 115</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/RieberHall115.jpg">
                      <div class="ui large label">
                        <center>Rieber Hall 115</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #13 - Service Points Rieber Hall - END -->

      <!-- MODAL #14 - Service Points SEL -->
      <!-- MODAL #14 - Service Points SEL -->
      <!-- MODAL #14 - Service Points SEL -->
     <div class="ui united large modal" id="unitSel">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="SEL Boelter, Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>SEL Boelter, Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="SEL Boelter, Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Off-Desk.jpg">
                      <div class="ui large label">
                        <center>SEL Boelter, Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="SEL Boelter, Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/Ref-Desk.jpg">
                      <div class="ui large label">
                        <center>SEL Boelter, Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="SEL Geology, Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>SEL Geology, Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #14 - Service Points SEL - END -->

      <!-- MODAL #15 - Service Points SRLF -->
      <!-- MODAL #15 - Service Points SRLF -->
      <!-- MODAL #15 - Service Points SRLF -->
      <div class="ui united large modal" id="unitSrlf">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="SRLF Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">SRLF Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>SRLF Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #15 - Service Points SRLF - END -->

      <!-- MODAL #16 - Service Points Social Science Data Archive -->
      <!-- MODAL #16 - Service Points Social Science Data Archive -->
      <!-- MODAL #16 - Service Points Social Science Data Archive -->
      <div class="ui united large modal" id="unitSocialScienceDataArchive">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Social Science Data Archive Office">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Office</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Office</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #16 - Service Points Social Science Data Archive - END -->

      <!-- MODAL #17 - Service Points YRL -->
      <!-- MODAL #17 - Service Points YRL -->
      <!-- MODAL #17 - Service Points YRL -->
      <div class="ui united large modal" id="unitYrl">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Access Services - A-level service desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Access Services - A-level service desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/AccessServices-YRL.jpg">
                      <div class="ui large label">
                        <center>Access Services - A-level service desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="YRL Access Services Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">YRL Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/YRL-CirculationDesk.jpg">
                      <div class="ui large label">
                        <center>YRL Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="HSS/IS, Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">HSS/IS, Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/HSS-IS-OffDesk.jpg">
                      <div class="ui large label">
                        <center>HSS/IS, Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="HSS/IS, Reference desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">HSS/IS, Reference desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/HSS-IS-ReferenceDesk.jpg">
                      <div class="ui large label">
                        <center>HSS/IS, Reference desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #17 - Service Points YRL - END -->

      <!-- MODAL #18 - Library Message -->
      <!-- MODAL #18 - Library Message -->
      <!-- MODAL #18 - Library Message -->
      <div class="ui united large modal" id="libraryMsg">

        <div class="header initial">
          Please pick a service point.
        </div>

        <div class="header tab-switch">
          Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="The Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>The Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
    
            </div>
          </div>
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #18 - Library Message - END -->

      <!-- MODAL #19 - Individual Login -->
      <!-- MODAL #19 - Individual Login -->
      <!-- MODAL #19 - Individual Login -->
      <div class="ui united large modal" id="individualLogin">

        <div class="header">
          Please pick a Login Provider
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="UCLA Login">
                  <div class="ui card">

                    <div class="image">
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/b_ucla.jpg">
                    </div>

                    <div class="blurring dimmable image">
                      <div class="ui fluid large label">
                        <center>UCLA Login</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve disabled button" data-value="Future Login">
                  <div class="ui card">

                    <div class="image">
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/social-icons2.png">
                    </div>

                    <div class="blurring dimmable image">
                      <div class="ui fluid large label">
                        <center>Future Login</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #19 - Individual Login - END -->

      <!-- MODAL #20 - Group Login -->
      <!-- MODAL #20 - Group Login -->
      <!-- MODAL #20 - Group Login -->
      <div class="ui united large modal" id="groupLogin">

        <div class="header">
          Please pick a User Group
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" name="usersGroups" id="albums1">
      
            </div>
          </div>
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #20 - Group Login - END -->

      <!-- login/out related modals -----------------------------------------------------------------------------------------  -->
      <!-- MODAL #21 - logoutModal -->
      <!-- MODAL #21 - logoutModal -->
      <!-- MODAL #21 - logoutModal -->
      <div class="ui united large logoutModal modal" id="logoutModal">

        <div class="header">
          <center>Data saved?<br>Tap on "cancel" to go back and save your data.</center>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui one centered stackable link cards" name="usersGroups" id="albums1">
      
              <div class="actions">
                <div class="ui centered approve button" data-value="logout">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="massive power icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>Logout</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #21 - logoutModal -->

      <!-- MODAL #21b - reLoginHereModal -->
      <!-- MODAL #21b - reLoginHereModal -->
      <!-- MODAL #21b - reLoginHereModal -->
      <div class="ui united large reLoginHereModal modal" id="reLoginHereModal">

        <div class="header">
          <center>Data saved?<br>Tap on "cancel" to go back and save your data.</center>
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui one centered stackable link cards" name="usersGroups" id="albums1">
      
              <div class="actions">
                <div class="ui centered approve button" data-value="reLoginHere">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="massive power icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>Re-Login</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #21b - reLoginHereModal -->

      <!-- MODAL #22 - changeLoginModal  -->
      <!-- MODAL #22 - changeLoginModal  -->
      <!-- MODAL #22 - changeLoginModal  -->
      <div class="ui united large changeLoginModal modal" id="changeLoginModal">

        <div class="header">
          You are already logged in as: <?php print( $page['sfUserFirst'] ); ?> <?php print( $page['sfUserLast'] ); ?>
        </div>

        <div class="ui centered card">
          <div class="ui centered approve button" data-value="reLogin">
            <div class="blurring dimmable image">
              <div class="ui center">
                <i class="massive exchange icon"></i>
              </div>
              <div class="ui huge fluid large label">
                <center>To login as another user:<br><br> - Tap here to log out<br> - Then, log back in<br></center>
              </div>
            </div>
          </div>
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #22 - changeLoginModal  -->

      <!-- MODAL #23 - directLoadWarningModal -->
      <!-- MODAL #23 - directLoadWarningModal -->
      <!-- MODAL #23 - directLoadWarningModal -->
      <div class="ui united large directLoadWarningModal modal" id="directLoadWarningModal">

        <div class="header">
          You are already logged in as: <?php print( $page['sf_user_first'] ); ?> <?php print( $page['sf_user_last'] ); ?>
        </div>

        <div class="ui centered card">
          <div class="ui centered approve button" data-value="reLogin">
            <div class="blurring dimmable image">
              <div class="ui center">
                <i class="massive exchange icon"></i>
              </div>
              <div class="ui fluid large label">
                <center>To use StatsForm:<br><br>Tap here to log out<br>then<br>Log back in<br>on the following page<br><br>You may change location<br>or user/group settings<br>when logging back in.</center>
              </div>
            </div>
          </div>
        </div>

        <div class="actions">
          <div class="ui black deny button" data-value="savereLoginCancel">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #23 - directLoadWarningModal -->

      <!-- MODAL #24 - reLoginConfirmationWait -->
      <!-- MODAL #24 - reLoginConfirmationWait -->
      <!-- MODAL #24 - reLoginConfirmationWait -->
      <div class="ui united large reLoginConfSpinner modal" id="reLoginConfSpinner">

        <div class="header">
        </div>

        <div class="ui centered card">
          <div class="ui centered approve button" data-value="reLogin">
            <div class="blurring dimmable image">
              <div class="ui center">
                <i class="massive sun outline loading icon"></i>
              </div>
              <div class="ui huge fluid large label">
                <center> logging out ... </center>
              </div>
            </div>
          </div>
        </div>

        <div class="actions">
          &nbsp;
        </div>

      </div>
      <!-- MODAL #24 - reLoginConfirmationWait -->
      <!-- login/out related modals -----------------------------------------------------------------------------------------  -->

      <!-- MODAL for Quick Questions page -->
      <!-- Directions Modal -->
      <div class="ui modal" id="directions-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
            <div class="header">
                <h1>
                    Edit content for Directions
                </h1>
                <div class="ui massive form">
                    <div class="field">
                        <label>
                            New count:
                        </label>
                        <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-directions-count">
                    </div>
                </div>
            </div>
        </div>
      </div>

      <!-- Lookup Modal -->
      <div class="ui modal" id="lookup-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
            <div class="header">
                <h1>
                    Edit content for Lookup
                </h1>
                <div class="ui massive form">
                    <div class="field">
                        <label>
                            New count:
                        </label>
                        <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-lookup-count">
                    </div>
                </div>
            </div>
        </div>
      </div>

      <!-- Policy Modal -->
      <div class="ui modal" id="policy-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
            <div class="header">
                <h1>
                    Edit content for Policy
                </h1>
                <div class="ui massive form">
                    <div class="field">
                        <label>
                            New count:
                        </label>
                        <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-policy-count">
                    </div>
                </div>
            </div>
        </div>
      </div>

      <!-- Research Modal -->
      <div class="ui modal" id="research-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
            <div class="header">
                <h1>
                    Edit content for Research Assistance
                </h1>
                <div class="ui massive form">
                    <div class="field">
                        <label>
                            New count:
                        </label>
                        <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-research-count">
                    </div>
                </div>
            </div>
        </div>
      </div>

      <!-- Technical Modal -->
      <div class="ui modal" id="technical-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

        <div class="content">
            <div class="header">
                <h1>
                    Edit content for Technical Assistance
                </h1>
                <div class="ui massive form">
                    <div class="field">
                        <label>
                            New count:
                        </label>
                        <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-technical-count">
                    </div>
                </div>
            </div>
        </div>
        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL for Quick Questions page - END -->


      <!-- MODAL for Research Assistance page -->
      <!-- Directions (Research Assistance) Modal -->
      <div class="ui modal" id="directionsResearch-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

          <div class="content">
              <div class="header">
                  <h1>
                      Edit content for Directions
                  </h1>
                  <div class="ui massive form">
                      <div class="field">
                          <label>
                              New count:
                          </label>
                          <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-directionsResearch-count">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Lookup (Research Assistance) Modal -->
      <div class="ui modal" id="lookupResearch-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

          <div class="content">
              <div class="header">
                  <h1>
                      Edit content for Lookup
                  </h1>
                  <div class="ui massive form">
                      <div class="field">
                          <label>
                              New count:
                          </label>
                          <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-lookupResearch-count">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Policy (Research Assistance) Modal -->
      <div class="ui modal" id="policyResearch-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

          <div class="content">
              <div class="header">
                  <h1>
                      Edit content for Policy
                  </h1>
                  <div class="ui massive form">
                      <div class="field">
                          <label>
                              New count:
                          </label>
                          <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-policyResearch-count">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Research (Research Assistance) Modal -->
      <div class="ui modal" id="researchResearch-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

          <div class="content">
              <div class="header">
                  <h1>
                      Edit content for Research Assistance
                  </h1>
                  <div class="ui massive form">
                      <div class="field">
                          <label>
                              New count:
                          </label>
                          <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-researchResearch-count">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Technical (Research Assistance) Modal -->
      <div class="ui modal" id="technicalResearch-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

          <div class="content">
              <div class="header">
                  <h1>
                      Edit content for Technical Assistance
                  </h1>
                  <div class="ui massive form">
                      <div class="field">
                          <label>
                              New count:
                          </label>
                          <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-technicalResearch-count">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- People (Research Assistance) Modal -->
      <div class="ui modal" id="peopleResearch-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

          <div class="content">
              <div class="header">
                  <h1>
                      Edit content for People Total
                  </h1>
                  <div class="ui massive form">
                      <div class="field">
                          <label>
                              New count:
                          </label>
                          <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-peopleResearch-count">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Minutes (Research Assistance) Modal -->
      <div class="ui modal" id="minutesResearch-modal">

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

          <div class="content">
              <div class="header">
                  <h1>
                      Edit content for Minutes Total
                  </h1>
                  <div class="ui massive form">
                      <div class="field">
                          <label>
                              New count:
                          </label>
                          <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-minutesResearch-count">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- MODAL for Research Assistance page - END -->
      <!-- MODALS END --------------------------------------------------------------------------------------- -->


      <!-- HEADER ------------------------------------------------------------------------------------------------------------->
      <!-- HEADER ------------------------------------------------------------------------------------------------------------->
      <!-- HEADER ------------------------------------------------------------------------------------------------------------->

      <!-- SPACER -->
      <div class="ui stackable grid container">
        <div class="row">
          <div class="column">&nbsp;
          </div>
        </div>
      </div>



      <!-- GRID CONTAINER 0 -->
      <div class="ui main stackable middle aligned grid container">

        <!-- TOP ROW - TITLE / DATE /TIME -->
        <div class="sixteen column row">

          <!-- OUTER LEFT COLUMN -->
          <div class="ui sixteen wide column">
            <div class="ui icon message">
              <i class="write icon"></i>
              <div class="content">


                <div class="large pageTitle" align="left">
                    <a href="https://jira.library.ucla.edu/browse/WS-1258">Click here to go to leave feedback on the Jira ticket</a>
                </div>


              </div>
            </div>
          </div>


        </div>
        <!-- TOP ROW - TITLE / DATE /TIME -->

      </div>
      <!-- GRID CONTAINER 0 -->

      <!-- GRID CONTAINER 1 -->
      <div class="ui main stackable middle aligned grid container">

        <!-- TOP ROW - TITLE / DATE /TIME -->
        <div class="four column row">

          <!-- OUTER LEFT COLUMN -->
          <div class="ui eight wide column">
            <div class="ui icon message">
              <i class="university icon"></i>
              <div class="content">

                <div class="huge pageTitle" align="left">
                  UCLA Stats Form
                </div>

              </div>
            </div>
          </div>

          <!-- OUTER MIDDLE COLUMN -->
          <div class="ui four wide column">
            <div class="ui stackable middle aligned grid container">
              <div class="sixteen column row">

                <!-- INNER MIDDLE COLUMN -->
                <div class="ui sixteen wide center floated column">
                  <div class="content">
                    <div class="ui left aligned">
                      <div class="ui fluid input right icon">
                        <i id="iconCal" class="large calendar icon"></i>
                        <input id="inputDatetime" name="inputDatetime" class="datepicker-fullscreen" type="text" placeholder="Date/Time" data-value="">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- INNER MIDDLE COLUMN -->

              </div>
            </div>
          </div>
          <!-- OUTER MIDDLE COLUMN -->

          <!-- OUTER RIGHT COLUMN -->
          <div class="ui four wide column">
            <div class="ui stackable middle aligned grid container">
              <div class="sixteen column row">

                <!-- INNER MIDDLE COLUMN -->
                <div class="ui sixteen wide center floated column">
                  <div class="content">
                    <div class="ui center aligned">
                      <div class="ui fluid input right icon">
                        <i id="iconTim" class="large clock icon"></i>
                        <input id="inputTime" name="inputTime" class="timepicker" data-content="Your time selection will be held for 5 minutes - please submit your form in this period." type="text" placeholder="Date/Time" data-value="">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- INNER MIDDLE COLUMN -->

              </div>
            </div>
          </div>
          <!-- OUTER RIGHT COLUMN -->

        </div>
        <!-- TOP ROW - TITLE / DATE /TIME -->

      </div>
      <!-- GRID CONTAINER 1 -->


      <!-- GRID CONTAINER 2 -->
      <div class="ui main stackable grid container">

        <!-- BOTTOM ROW - BUTTONS -->
        <div class="three column row">





          <!-- OUTER LEFT COLUMN -->
          <div class="ui column">

            <!-- BOTTOM -->
            <div class="content">
              <div class="ui stackable grid container">
                <div class="two column row">


                  <div class="ui column">
                    <div class="ui fluid buttons">
                      <button data-modal="libraryUnits" class="show ui basic blue button" id="result" name="result">Choose <br>Library <br>Unit</button>
                    </div>
                  </div>


                  <div class="ui column">
                    <div class="ui fluid buttons">
                      <button data-modal="modal4" class="show ui basic black button" id="servicePoint" name="servicePoint">Choose <br>Service <br>Point</button>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <!-- BOTTOM -->

          </div>
          <!-- OUTER LEFT COLUMN -->





          <!-- OUTER MIDDLE COLUMN -->
          <div class="column">

            <!-- BOTTOM -->
            <div class="column">
              <div class="ui stackable grid container">
                <div class="one column row">

                  <div class="ui column">
                    <div class="ui fluid buttons">
                      <!-- dhc - dont double huge the buttons! -->
                      <button data-modal="individualLogin" class="show ui basic orange button" id="unitIndividual" name="unitIndividual">Choose <br>Single <br>Login</button>
                      <div class="or" style="height: 4.57142857em"></div>
                      <button data-modal="groupLogin" class="show ui basic blue button" id="unitGroup" name="unitGroup">Choose <br>Group <br>Login</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- BOTTOM -->

          </div>
          <!-- OUTER MIDDLE COLUMN -->





          <!-- OUTER RIGHT COLUMN -->
          <div class="ui column">

            <!-- BOTTOM -->
            <div class="content">
              <div class="ui stackable grid container">
                <div class="one column row">
                  <div class="ui center aligned column">

                    <div class="ui massive teal buttons">
                      <div class="ui fluid logout button">
                        <div class="ui logout xlabel"><?php print( $page['sfUserName'] ); ?></div>
                      </div>
                      <div class="ui floating logout dropdown icon button">
                        <i class="dropdown icon"></i>
                        <div class="menu">
                          <div class="item disabled" data-value="darrowco" id="userName" name="userName"><i class="user icon"></i><?php print( $page['sfUserFirst'] ); ?> <?php print( $page['sfUserLast'] ); ?></div>
                          <!-- tbd
                          <div class="item" data-value="1" id="reLoginHere"><i class="edit icon"></i> Change User (logs out current user)</div>
                          -->
                          <div class="item" data-value="1" id="logout"><i class="edit icon"></i> Logout</div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- BOTTOM -->

          </div>
          <!-- OUTER RIGHT COLUMN -->

        </div> <!-- 16 column row -->
      </div> <!-- grid container -->
      <!-- HEADER CONTENT END -->

      <!-- HEADER END -->
      <!-- HEADER END -->
      <!-- HEADER END -->

      <!-- these are set here on the FORM page and not set on the other pages -->
      <div id="testrr" data-value="<?php print( $page['testrr'] ); ?>"></div>
      <div id="sfResearchTabValue" data-value="<?php print( $page['sfResearchTabValue'] ); ?>"></div>
      <div id="sfToken" data-value="<?php print( $page['variables'] ); ?>"></div>
      <div id="sfSession" data-value="<?php print( $page['sfSession'] ); ?>"></div>
      <div id="sfUserName" data-value="<?php print( $page['sfUserName'] ); ?>"></div>
      <div id="sfUserFirst" data-value="<?php print( $page['sfUserFirst'] ); ?>"></div>
      <div id="sfUserLast" data-value="<?php print( $page['sfUserLast'] ); ?>"></div>
      <div id="sfUnit" data-value="<?php print( $page['sfUnit'] ); ?>"></div>
      <div id="sfUnitPointID" data-value="<?php print( $page['sfUnitPointID'] ); ?>"></div>
      <div id="sfUnitColor" data-value="<?php print( $page['sfUnitColor'] ); ?>"></div>
      <div id="sfServicePoint" data-value="<?php print( $page['sfServicePoint'] ); ?>"></div>
      <div id="sfServicePointID" data-value="<?php print( $page['sfServicePointID'] ); ?>"></div>
      <div id="sfServicePointColor" data-value="<?php print( $page['sfServicePointColor'] ); ?>"></div>
      <div id="sfUnitIndividualID" data-value="<?php print( $page['sfUnitIndividualID'] ); ?>"></div>
      <div id="sfUnitIndividualLabel" data-value="<?php print( $page['sfUnitIndividualLabel'] ); ?>"></div>
      <div id="sfUnitIndividualColor" data-value="<?php print( $page['sfUnitIndividualColor'] ); ?>"></div>
      <div id="sfUnitGroupLabel" data-value="<?php print( $page['sfUnitGroupLabel'] ); ?>"></div>
      <div id="sfUnitGroupID" data-value="<?php print( $page['sfUnitGroupID'] ); ?>"></div>
      <div id="sfUnitGroupColor" data-value="<?php print( $page['sfUnitGroupColor'] ); ?>"></div>
      <div id="sfPath" data-value="<?php print( $page['sf_path'] ); ?>"></div>
      <div id="sf_depts" data-value="<?php print( $page['sf_depts'] ); ?>"></div>



<!--
document.getElementById('unitGroup').value = sfGroupVals[1];
document.getElementById('sfUnitGroupID').value
-->

      <!-- BODY -->
      <!-- BODY -->
      <!-- BODY -->

      <div class="ui stackable grid container">
        <div class="row">
          <div class="column">&nbsp;
          </div>
        </div>
      </div>











      <!-------------------------- TAB 1 - Quick Questions -------------------------->
      <!-------------------------- TAB 1 - Quick Questions -------------------------->
      <!-------------------------- TAB 1 - Quick Questions -------------------------->
      <div class="ui bottom attached active tab" id="tabQuickQuestions" data-tab="quickQuestionsTab">

        <!-- PAGE TOP CONTENT -->
        <div class="ui stackable bottom aligned bottom aligned grid container">
          <div class="ui top attached tabular menu" id="tabTabular">
            <a class="active item" id="tabQuick" data-tab="quickQuestionsTab">Quick Questions</a>
            <a class="active grey item" id="tabResearch" data-tab="researchAssistance">Research Assistance</a>
            <a class="active disabled grey item" data-tab="reportsTabOFF">Reports</a>




          </div>


        </div>
        <!-- PAGE TOP CONTENT - END -->

        <!-- MAIN PAGE CONTENT - Quick Questions -->
        <div id="grid1" class="ui main stackable grid container"> <!-- Outer Grid1 -->
          <div class="sixteen column row">

            <div class="ui sixteen wide column"> <!-- 16 wide column1 -->
              <div class="content">
                <div class="active content">

                  <div class="ui equal width aligned grid"> <!-- Inner Grid1 -->

                    <div class="eight wide column"> 
                      <div class="ui fluid card withCount" id="directionsArea">
                        <div class="content"> 
                          <div class="ui inverted segment left floated" id="directions">

                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="directional">0</div> 
                                <div class="label"> Count </div>
                              </div>
                            </div>

                          </div>
                          <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/directions.png">
                          <div class="ui left aligned">
                            <div class="header"> Directions </div> 
                            <div class="meta"> Location or directions provided. E.G. rooms, events, contact info, etc. </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="eight wide column"> 
                      <div class="ui fluid card withCount" id="lookupArea">
                        <div class="content">
                          <div class="ui inverted segment left floated" id="lookup">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="lookUp">0</div> 
                                <div class="label"> Count </div>
                              </div>
                            </div>
                          </div>
                          <div class="ui left aligned">
                            <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/lookup.png"> 
                            <div class="header"> Look Up Known Item </div>
                          </div>
                          <div class="meta"> Find call numbers, books, articles, locations, etc. for known items requested by patron. </div>
                        </div>
                      </div>
                    </div>

                    <div class="eight wide column"> 
                      <div class="ui fluid card withCount" id="policyArea">
                        <div class="content">
                          <div class="ui inverted segment left floated" id="policy">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="policyVal">0</div> 
                                <div class="label"> Count </div>
                              </div>
                            </div>
                          </div>
                          <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/policy.png"> 
                          <div class="ui left aligned">
                            <div class="header"> Policy & Operations</div>
                            <div class="meta"> Hours, access privileges, borrowing, reservations, other policies. </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="eight wide column"> 
                      <div class="ui fluid card withCount" id="researchArea">
                        <div class="content">
                          <div class="ui inverted segment left floated" id="research">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="referralCount">0</div> 
                                <div class="label"> Count </div>
                              </div>
                            </div>
                          </div>
                          <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/research.png">
                          <div class="ui left aligned">
                            <div class="header"> Referral </div>
                            <div class="meta"> Referral to advance research support, library location, campus support, etc. </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="eight wide column"> 
                      <div class="ui fluid card withCount" id="technicalArea">
                        <div class="content">
                          <div class="ui inverted segment left floated" id="technical">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="technicalVal">0</div> 
                                <div class="label"> Count </div>
                              </div>
                            </div>
                          </div>
                          <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/technical.png"> 
                          <div class="ui left aligned">
                            <div class="header"> Technical Assistance </div>
                            <div class="meta"> Help with printers, computers, software, scanners, etc. </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="eight wide column"> 
                      <div class="ui fluid card ">
                        <button style = "height: 120px" class=" ui button" id="submitQuickQuestions"> <h1 style = "font-size:70px"> SUBMIT </h1> </button>
                      </div>
                    </div>

                  </div> <!-- Inner Grid 1 - END -->

                </div>
              </div>
            </div> <!-- 16 wide column 1 - END -->

          </div>
        </div> <!-- Outer Grid 1 - END -->
        <!-- MAIN PAGE CONTENT - Quick Questions  - END -->
      </div>
      <!-------------------------- TAB 1 - Quick Questions - END -------------------------->


      <!-------------------------- TAB 2 - Research Assistance ----------------------------------------------------------------------------------------------------->
      <!-------------------------- TAB 2 - Research Assistance ----------------------------------------------------------------------------------------------------->
      <!-------------------------- TAB 2 - Research Assistance ----------------------------------------------------------------------------------------------------->
      <div class="ui bottom attached tab" id="tabResearchAssistance" data-tab="researchAssistance">

        <!-- PAGE TOP CONTENT -->
        <div class="ui stackable bottom aligned bottom aligned grid container">
          <div class="ui top attached tabular menu">
            <a class="active grey item" data-tab="quickQuestionsTab">Quick Questions</a>
            <a class="active item" data-tab="researchAssistance">Research Assistance</a>
            <a class="active disabled grey item" data-tab="reportsTabOFF">Reports</a>
          </div>
        </div>
        <!-- PAGE TOP CONTENT - END -->


        <!-- MAIN PAGE CONTENT - Research Assistance -->
        <div class="ui main stackable grid container"> <!-- grid container1 -->
          <div class="three column row"> <!-- three column row -->
            <div class="ui main stackable center aligned middle aligned grid container"> <!-- grid container2 -->
              <div class="sixteen column row"> <!-- 16 column row -->
                <div class="ui eight wide column">
                    <div class="content">
                      <div class="ui huge fluid input">
                        <div class="ui big label" id="questionTopic" name="questionTopic">
                          Question<br>/ Topic
                        </div>
                        <div>
                          <textarea id="exboxQuestionTopic" placeholder="Enter here..." type="text"></textarea>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="ui four wide column">
                  <div class="content">
                    <div class="ui left aligned">
                      <div id="patronStatus" name="status" class="ui fluid selection status dropdown">
                        <input id="patronStatusInput" name="patronStatusInput" value="default" type="hidden">
                        <i class="dropdown icon"></i>
                        <div class="text">Patron Status</div>
                        <div class="menu">
                          <div class="item" data-value="7">Patron Status</div>
                          <div class="item" data-value="7">Unknown</div>
                          <div class="item" data-value="1">UCLA undergrad</div>
                          <div class="item" data-value="2">UCLA graduate student</div>
                          <div class="item" data-value="3">UCLA faculty</div>
                          <div class="item" data-value="4">UCLA researcher/other</div>
                          <div class="item" data-value="6">UCLA alumnus/a</div>
                          <div class="item" data-value="5">non-UCLA</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="ui four wide column">
                  <div class="content">
                    <div class="ui left aligned">
                      <div id="interactionMode" name="method" class="ui fluid selection mode dropdown">
                        <input id="interactionModeInput" name="interactionModeInput" value="default" type="hidden">
                        <i class="dropdown icon"></i>
                        <div class="text">Assistance Method</div>
                        <div class="menu">
                          <div class="item" data-value="01">Assistance Method</div>
                          <div class="item" data-value="01">In-Person</div>
                          <div class="item" data-value="03">E-mail</div>
                          <div class="item" data-value="02">Telephone</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div> <!-- 16 column row2 - END -->
            </div> <!-- grid container -->
          </div> <!-- three column row - END -->
        </div> <!-- grid container1 -->
        <!-- PAGE TOP CONTENT - END -->

        <!-- PAGE TOP CONTENT -->
        <div class="ui main stackable grid container"> <!-- grid container1 -->
          <div class="three column row"> <!-- three column row -->
            <div class="ui main stackable center aligned middle aligned grid container"> <!-- grid container2 -->
              <div class="sixteen column row"> <!-- 16 column row -->
                <div class="ui four wide floated column">
                    <div class="content">
                      <div class="ui left aligned">
                        <select name="deptWs" id="deptWs" class="ui fluid search dropdown">
                          <option value="0">Dept or Unit</option>
                          <!-- the departments are auto generated in js with data from WS -->
                        </select>
                      </div>
                    </div>
                </div>

                <div class="ui eight wide floated column">
                    <div class="content">
                      <div class="ui huge fluid input">
                        <div class="ui big label">
                          Course <br>/ Section
                        </div>
                        <div>
                          <textarea class="sfTextArea" id="exboxCourseSection" placeholder="Enter here..." type="text"></textarea>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="ui three wide test column">
                  <div class="ui main stackable middle aligned grid container">
                    <div class="sixteen column row referralCheckboxArea">
                      <div class="ui sixteen wide left floated column">
                        <div class="ui test content">
                          <div class="ui left aligned">
                            <div class="ui test checkbox referralCheckbox">
                              <input type="checkbox" id="referralCheckbox">
                              <label>Referral?</label> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div> <!-- 16 column row2 - END -->
            </div> <!-- grid container -->
          </div> <!-- three column row - END -->
        </div> <!-- grid container1 -->
        <!-- PAGE TOP CONTENT - END -->

        <!-- MAIN PAGE CONTENT -->
        <div class="ui main stackable grid container"> <!-- Outer Grid2 -->
          <div class="sixteen column row">

            <div class="ui sixteen wide column"> <!-- 16 wide column2 -->
              <div class="content">
                <div class="active content">
                  <div class="ui equal width aligned grid"> <!-- Inner Grid2 -->

                    <div class="eight wide column">
                      <div class="ui fluid card withCheckDivTouch" id="sfResearchCheckbox"> <!-- withCheck, withCheckTouch is in custom.tap.js -->
                        <div class="content middle aligned">
                          <input type="checkbox" id="researchCheckbox" name="researchCheckbox" style="opacity: 0.0; position: absolute; left: -9999px">
                          <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/research.png"> 
                          <div class="ui left aligned">
                            <div class="header"> Research Assistance </div>
                            <div class="meta"> Help patron with research strategy, advice, overview of resources (drop-in). </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="eight wide column">
                      <div class="ui fluid card withCheckDivTouch" id="sfTechnicalCheckbox">
                        <div class="content middle aligned">
                          <input type="checkbox" id="technicalCheckbox" name="technicalCheckbox" style="opacity: 0.0; position: absolute; left: -9999px">
                          <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/technical.png"> 
                          <div class="ui left aligned">
                            <div class="header"> Technical Assistance </div>
                            <div class="meta"> Help with printers, computers, software, scanners, etc. </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="eight wide column">
                      <div class="ui fluid card withCheckDivTouch" id="sfLookupCheckbox">
                        <div class="content middle aligned">
                          <input type="checkbox" id="lookupCheckbox" name="lookupCheckbox" style="opacity: 0.0; position: absolute; left: -9999px">
                          <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/lookup.png"> 
                          <div class="ui left aligned">
                            <div class="header"> Look Up Known Item </div>
                            <div class="meta"> Find call numbers, books, articles, locations, etc. for known items requested by patron. </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="eight wide column">
                      <div class="ui fluid card withCheckDivTouch" id="sfDirectionalCheckbox">
                        <div class="content middle aligned">
                          <input type="checkbox" id="directionalCheckbox" name="directionalCheckbox" style="opacity: 0.0; position: absolute; left: -9999px">
                          <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/directions.png"> 
                          <div class="ui left aligned">
                            <div class="header"> Directional Assistance </div>
                            <div class="meta"> Location or directions provided. E.G. rooms, events, contact info, etc. </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="eight wide column">
                      <div class="ui fluid card withCheckDivTouch" id="sfPolicyCheckbox">
                        <div class="content middle aligned">
                          <input type="checkbox" id="policyCheckbox" name="policyCheckbox" style="opacity: 0.0; position: absolute; left: -9999px">
                          <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/policy.png"> 
                          <div class="ui left aligned">
                            <div class="header"> Policy & Operations</div>
                            <div class="meta"> Hours, access privileges, borrowing, reservations, other policies. </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="four wide column"> 
                      <div class="ui fluid card withCount">
                        <div class="content middle aligned">
                          <div class="ui inverted segment left floated" id="peopleResearch">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="patronCount">0</div> 
                                <div class="label">Count</div>
                              </div>
                            </div>
                          </div>
                          <div class="ui left aligned">
                            <div class="header">People</div>
                            <div class="meta"> Number of people served </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="four wide column"> 
                      <div class="ui fluid card withCount">
                        <div class="content middle aligned">
                          <div class="ui inverted segment left floated" id="minutesResearch">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="minuteCount">0</div> 
                                <div class="label">Minutes</div>
                              </div>
                            </div>
                          </div>
                          <div class="ui left aligned">
                            <div class="header">Minutes</div>
                            <div class="meta"> Session in minutes </div>
                          </div> 
                        </div> 
                      </div>
                    </div>

                    <div class="ui eight wide floated column">
                      <div class="content">
                        <div>
                          <textarea style = "height: 120px" id="commentTopic" placeholder="Enter comments and feedback here..." type="text"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="eight wide right floated column">
                      <div class="ui fluid card ">
                        <button style = "height: 120px" class=" ui button" id="submitResearchAssistance"> <h1 style = "font-size:70px"> SUBMIT </h1> </button>
                      </div>
                    </div>

                  </div> <!-- Inner Grid2 - END -->

                </div>
              </div>
            </div> <!-- 16 wide column2 - END -->

          </div>
        </div> <!-- Outer Grid2 - END -->
        <!-- MAIN PAGE CONTENT - Research Assistance - END -->


      </div>
      <!-------------------------- TAB 2 - Research Assistance - END -------------------------->


      <!-------------------------- REFERENCE ---------------------------->
      <!-- Save for data to set up reportsTab, above  -->
      <div class="ui bottom attached tab" data-tab="reportsTab">

        <!-- PAGE TOP CONTENT -->
        <div class="ui stackable bottom aligned bottom aligned grid container">
          <div class="ui top attached tabular menu">
            <a class="active grey item" data-tab="quickQuestionsTab">Quick Questions</a>
            <a class="active grey item" data-tab="researchAssistance">Research Assistance</a>
            <a class="active disabled grey item" data-tab="reportsTabOFF">Reports</a>
          </div>
        </div>
        <!-- PAGE TOP CONTENT - END -->



        <!-------------------------- HELP Tab page ---------------------------->
        <div class="content">

          <div class="ui equal width aligned grid"> <!-- grid container -->

            <div class="eight wide column">
              <div class="ui fluid card">
                <div class="content">
                  <img class="ui tiny image left floated" src="../../img/research.png"> 
                  <div class="header"> Research Assistance </div>
                  <div class="meta"> Help patron with research strategy, advice, overview of resources (drop-in). </div>
                </div> 
              </div>
            </div>

            <div class="eight wide column">
              <div class="ui fluid card">
                <div class="content">
                  <img class="ui tiny image left floated" src="../../img/technical.png"> 
                  <div class="header"> Technical Assistance </div>
                  <div class="meta"> Help with printers, computers, software, scanners, etc. </div>
                </div> 
              </div>
            </div>

            <div class="eight wide column">
              <div class="ui fluid card">
                <div class="content">
                  <img class="ui tiny image left floated" src="../../img/lookup.png"> 
                  <div class="header"> Look up Known Item </div>
                  <div class="meta"> Find call numbers, books, articles, locations, etc. for known items requested by patron. </div>
                </div> 
              </div>
            </div>

            <div class="eight wide column">
              <div class="ui fluid card">
                <div class="content">
                  <img class="ui tiny image left floated" src="../../img/directions.png"> 
                  <div class="header"> Directions3 </div>
                  <div class="meta"> Location or directions provided e.g. rooms, events, contact information, etc. </div>
                </div> 
              </div>
            </div>

            <div class="eight wide column">
              <div class="ui fluid card">
                <div class="content">
                  <img class="ui tiny image left floated" src="../../img/policy.png"> 
                  <div class="header"> Policy & Operations </div>
                  <div class="meta"> Hours, access privileges, borrowing, space reservations, other policies. </div>
                </div> 
              </div>
            </div>

            <div class="eight wide column"> <!-- eight wide column -->
              <form class="ui form"> <!-- Form -->

                <div class="field">
                  <label>
                    Question Topic
                  </label>
                  <input type="text" name="topic" placeholder="Add topic here." height="200">
                </div>

                <div class="grouped fields">
                  <label for="referralOFF">Referral?</label>
                  <div class="field">
                    <div class="ui radio checkbox">
                      <input type="radio" name="referralOFF" tabindex="0" class="hidden">
                      <label>Yes</label>
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui radio checkbox">
                      <input type="radio" name="referralOFF" tabindex="0" class="hidden">
                      <label>No</label>
                    </div>
                  </div>
                </div>

                <div class="field">
                  <label>
                    Department / Unit
                  </label>
                  <div class="ui selection dropdown">
                    <input type="hidden" name="department">
                    <i class="dropdown icon"></i>
                    <div class="default text">
                      Choose your department
                    </div>
                    <div class="menu">
                      <div class="item" data-value="none">N/A</div>
                      <div class="item" data-value="linguistics">Linguistics</div>
                      <div class="item" data-value="cs">Computer Science</div>
                      <div class="item" data-value="commstudies">Communications</div>
                      <div class="item" data-value="arts">Fine Arts</div>
                    </div>
                  </div>
                </div>

                <div class="field">
                  <label>Course / Section</label>
                  <input type="text" name="course" placeholder="CRS###/SEC###">
                </div>
              </form> <!-- Form - END -->
            </div> <!-- eight wide column -->

          </div> <!-- grid container - END -->

          <div class="ui equal width aligned grid"> <!-- grid container2 -->

            <div class="eight wide column">
              <div class="ui equal width aligned grid">

                <div class="four wide column">
                  <div class="ui inverted segment">
                    <div class="ui tiny inverted statistics">
                      <div class="statistic">
                        <div class="value">
                          0
                        </div>
                        <div class="label">
                          People
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="four wide column">
                  <div class="ui inverted segment">
                    <div class="ui tiny inverted statistics">
                      <div class="statistic">
                        <div class="value">
                          0
                        </div>
                        <div class="label">
                          Minutes
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="ui form">
                  <div class="inline fields">
                    <label>How did you help the patron?</label>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input type="radio" name="frequency" checked="checked">
                        <label>In-Person</label>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input type="radio" name="frequency">
                        <label>E-mail</label>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input type="radio" name="frequency">
                        <label>Telephone</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="eight wide column"> <!-- Eight Wide Column -->
                  <form class="ui form"> <!-- Form2 -->

                    <div class="grouped fields">
                      <label for="status" style = "font-size: 30px">Patron Status</label>

                      <div class="field">
                        <div class="ui radio checkbox">
                          <input type="radio" name="status" tabindex="0" checked="" class="hidden">
                          <label>Unknown</label>
                        </div>
                      </div>

                      <div class="field">
                        <div class="ui radio checkbox">
                          <input type="radio" name="status" tabindex="0" class="hidden">
                          <label>UCLA undergrad</label>
                        </div>
                      </div>

                      <div class="field">
                        <div class="ui radio checkbox">
                          <input type="radio" name="status" tabindex="0" class="hidden">
                          <label>UCLA graduate student</label>
                        </div>
                      </div>

                      <div class="field">
                        <div class="ui radio checkbox">
                          <input type="radio" name="status" tabindex="0" class="hidden">
                          <label>UCLA faculty</label>
                        </div>
                      </div>

                      <div class="field">
                        <div class="ui radio checkbox">
                          <input type="radio" name="status" tabindex="0" class="hidden">
                          <label>UCLA researcher/other</label>
                        </div>
                      </div>

                      <div class="field">
                        <div class="ui radio checkbox">
                          <input type="radio" name="status" tabindex="0" class="hidden">
                          <label>UCLA alumnus/a</label>
                        </div>
                      </div>

                      <div class="field">
                        <div class="ui radio checkbox">
                          <input type="radio" name="status" tabindex="0" class="hidden">
                          <label>non-UCLA</label>
                        </div>
                      </div>

                    </div>

                  </form> <!-- Form2 -->
                </div> <!-- Eight Wide Column - END -->

              </div>

            </div>

          </div>

        </div>

      </div>
      <!-- BODY END -->
      <!-- BODY END -->
      <!-- BODY END -->




      <!--
      // STATSFORM SCRIPTS
      // STATSFORM SCRIPTS
      // STATSFORM SCRIPTS
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      -->
      <script type="text/javascript">

        //////////// the following section applies to the Form page only
        if( <?php print( $page['sf_page_name'] ); ?> == 2 ) {

          // make global
          var sfDateSubmit = 0;
          var fromTab = 0;
          // increment the time display every minute (default); extend to x minutes below when user selects time
          var sfIntervalTime = 1;

          // this is displayed when switching between the Quick Questions and Research Asistance tabs
          var spMsgTxt = "Please re-select the Service Point when Switching between <em>Quick Search</em> and <em>Research Questions</em>.";

          // populate the dropdown menu for departments on the FORM PAGE ONLY with data from Web Services collected in the Drupal module
          var sf_depts_vals = <?php print( $page['sf_depts'] ); ?>;
          $.each(sf_depts_vals.department,function(key,innerjson){
            $("#deptWs").append("<option value=" + innerjson.DepartmentID + ">" + innerjson.DepartmentName + "</option>");
          });

          var sfUnit = document.getElementById("sfUnit").dataset.value;
          var sfServicePoint = document.getElementById("sfServicePoint").dataset.value;

          function resetForms() {
            /// reset Service Point on tab selection
            ///  Quick Questions Page
            document.getElementById("directional").textContent = 0;
            document.getElementById("lookUp").textContent = 0;
            document.getElementById("policyVal").textContent = 0;
            document.getElementById("referralCount").textContent = 0;
            document.getElementById("technicalVal").textContent = 0;

            /// reset Service Point on tab selection
            ///  Research Assistance Page
            document.getElementById("exboxQuestionTopic").value = "";
            $('.ui.dropdown').dropdown('restore defaults'); // do this one first
            $('.ui.status,dropdown').dropdown('set text', 'Patron Status');
            $('.ui.status,dropdown').dropdown('set value', '1');
            $('.ui.mode,dropdown').dropdown('set text', 'Assistance Method');
            $('.ui.mode,dropdown').dropdown('set value', '01');
            document.getElementById("commentTopic").value = "";
            document.getElementById("exboxCourseSection").value = "";
            document.getElementById("referralCheckbox").checked = false;
            document.getElementById("researchCheckbox").checked = false;
            document.getElementById("researchCheckbox").value = 0;
            document.getElementById("technicalCheckbox").checked = false;
            document.getElementById("technicalCheckbox").value = 0;
            document.getElementById("lookupCheckbox").checked = false;
            document.getElementById("lookupCheckbox").value = 0;
            document.getElementById("directionalCheckbox").checked = false;
            document.getElementById("directionalCheckbox").value = 0;
            document.getElementById("policyCheckbox").checked = false;
            document.getElementById("policyCheckbox").value = 0;
            document.getElementById("patronCount").textContent = 0;
            document.getElementById("minuteCount").textContent = 0;
            document.getElementById("sfResearchCheckbox").className="ui fluid card withCheckDivTouch";
            document.getElementById("sfTechnicalCheckbox").className="ui fluid card withCheckDivTouch";
            document.getElementById("sfLookupCheckbox").className="ui fluid card withCheckDivTouch";
            document.getElementById("sfDirectionalCheckbox").className="ui fluid card withCheckDivTouch";
            document.getElementById("sfPolicyCheckbox").className="ui fluid card withCheckDivTouch";

            /// END - reset Service Point on tab selection
          }

        }
        //////////// the following section applies to the Form page only


        //////////// the following section applies to the BOTH pages

        // used to set the yyy-mmm-dd in ISO format
        Date.prototype.yyyymmdd = function() {
          var mm = (this.getMonth() + 1).toString(); // getMonth() is zero-based
          var dd = this.getDate().toString();

          return [this.getFullYear(), mm.length===2 ? '-' : '-0', mm, dd.length===2 ? '-' : '-0', dd].join(''); // padding
        };
        //////////// the following section applies to the BOTH pages


        // Actions to perform on page load
        // Actions to perform on page load
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $(document).ready(function() {

        // tooltip
	$('.timepicker')
	  .popup({
		on: 'hover'
	  })
	;

        //////////// the following section applies to the PRELOGIN pages
          if( <?php print( $page['sf_page_name'] ); ?> == 0 ) {

            /// default settings
            document.getElementById("servicePoint").disabled = true;
            document.getElementById("unitIndividual").disabled = true;
            document.getElementById("unitGroup").disabled = true;
            document.getElementById("submit0").disabled = true;

            document.getElementById('result').className = 'show ui rgba(255, 255, 255, 0.15) button';
            document.getElementById('servicePoint').className = 'show ui rgba(255, 255, 255, 0.15) button';
            document.getElementById('unitIndividual').className = 'show ui rgba(255, 255, 255, 0.15) button';
            document.getElementById('unitGroup').className = 'show ui rgba(255, 255, 255, 0.15) button';
            document.getElementById('submit0').className = 'show ui rgba(255, 255, 255, 0.15) button';
    
            // if user is logged in when requesting the preLogin page, pop up a msg: reLogin or quit?
            if( <?php print( $page['sf_user_login'] ); ?> == 1 ) {

            //add in role check next, allow role of statsform to skip reLogin (applies to preLogin page)
            //if( <?php print( $page['sf_user_role'] ); ?> == 1 ) {
                $('.ui.united.large.directLoadWarningModal.modal')
                  .modal('setting', 'closable', false)
                  $('#directLoadWarningModal').modal('show')
                ;
            //}
            }

          }
        //////////// the following section applies to the PRELOGIN pages


        //////////// the following section applies to the FORM pages
          if( <?php print( $page['sf_page_name'] ); ?> == 2 ) {

            $('[id ^= "exbox"]').focus(function() {
              $(this)
              .css("resize", "both")
              .animate({
                width:"120%",
                height:"300%"}, {
                duration: 1000
              }, {
                scrollTop: document.body.scrollHeight
              }, 'slow');
              //$("#questionTopic").html("<font color=red>Tap <br>to Close&nbsp;</font>");
            });

            $('[id ^= "exbox"]').blur(function() {
              $(this)
              .css("resize", "none")
              .stop()
              .css("width", "100%")
              .css("height", "100%")
              .css("box-shadow", "none");
              //$("#questionTopic").html("Question<br>/ Topic");
            });

            // these sre present to show status - logout out to go back to preLogin and change
//            document.getElementById("unitIndividual").disabled = true;
//            document.getElementById("unitGroup").disabled = true;

            // reinsert <br>'s and &nbsp;'s for display
            sfUnit = sfUnit.replace(/ /g, " <br>");
            sfUnit = sfUnit.replace(/%C2%A0/g, "&nbsp;");
            sfUnit = sfUnit.replace(/Data <br>/, "Data ");
            sfServicePoint = sfServicePoint.replace(/ /g, " <br>");
            sfServicePoint = sfServicePoint.replace(/^SEL <br>/, "SEL ");
            sfServicePoint = sfServicePoint.replace(/^LSC <br>/, "LSC ");
            sfServicePoint = sfServicePoint.replace(/^Access <br>/, "Access ");
            sfServicePoint = sfServicePoint.replace(/Service <br>/, "Service ");
            sfServicePoint = sfServicePoint.replace(/%C2%A0/g, "&nbsp;");

            // set checkbox values to 0/1 when checkbox is checked 
            //  on the Research Assistance page in order to use the same db field used by the Quick Questions page
            // This referral checkbox has extra code to allow an expanded touch area for use on tablets
            $('.referralCheckboxArea').click(function( event ) {
              if( document.getElementById("referralCheckbox").checked == 1 ) {
                if( $(event.target)[0].id == 'referralCheckbox' ){
                  document.getElementById("referralCheckbox").value = 1;
                  document.getElementById("referralCheckbox").checked = 1;
                } else {
                  document.getElementById("referralCheckbox").value = 0;
                  document.getElementById("referralCheckbox").checked = 0;
                }
              } else {
                if( $(event.target)[0].id == 'referralCheckbox' ){
                  document.getElementById("referralCheckbox").value = 0;
                  document.getElementById("referralCheckbox").checked = 0;
                } else {
                  document.getElementById("referralCheckbox").value = 1;
                  document.getElementById("referralCheckbox").checked = 1;
                }
              }
            });

            // set checkbox values to 0/1 when checkbox is checked 
            //  on the Research Assistance page in order to use the same db field used by the Quick Questions page
            $('#researchCheckbox').change(function(){
              if(this.checked) {
                document.getElementById("researchCheckbox").value = 1;
              } else {
                document.getElementById("researchCheckbox").value = 0;
              }
            });
            $('#technicalCheckbox').change(function(){
              if(this.checked) {
                document.getElementById("technicalCheckbox").value = 1;
              } else {
                document.getElementById("technicalCheckbox").value = 0;
              }
            });
            $('#lookupCheckbox').change(function(){
              if(this.checked) {
                document.getElementById("lookupCheckbox").value = 1;
              } else {
                document.getElementById("lookupCheckbox").value = 0;
              }
            });
            $('#directionalCheckbox').change(function(){
              if(this.checked) {
                document.getElementById("directionalCheckbox").value = 1;
              } else {
                document.getElementById("directionalCheckbox").value = 0;
              }
            });
            $('#policyCheckbox').change(function(){
              if(this.checked) {
                document.getElementById("policyCheckbox").value = 1;
              } else {
                document.getElementById("policyCheckbox").value = 0;
              }
            });

            // apply the user selections OBTAINED from the preLogin page
            // set Unit name
            $("#result").html( sfUnit );

            // set Unit color
            $sfUnitColor = document.getElementById("sfUnitColor").dataset.value;
            $sfUnitColor = 'show ui '+ $sfUnitColor + ' button';
            document.getElementById('result').className = $sfUnitColor;

            // set Service Point name
            $("#servicePoint").html( sfServicePoint );

            // set Service Point color
            $sfServicePointColor = document.getElementById("sfServicePointColor").dataset.value;
            $sfServicePointColor = 'show ui ' + $sfServicePointColor + ' button';
            document.getElementById('servicePoint').className = $sfServicePointColor;

            // set Individual Login button and Group button
            if( "<?php print( $page['sfUnitIndividualID'] ); ?>" == 'individual'){
              sfUnitIndividualID = 'individual';
              $("#unitIndividual").html( 'Set to use <br>UCLA <br>Login' );
              document.getElementById('unitIndividual').className = 'show ui green button';
              $("#unitGroup").html( 'Choose <br>Group <br>Login' );
              document.getElementById('unitGroup').className = 'show ui basic rgba(255, 255, 255, 0.15) button label';
            } else if( "<?php print( $page['sfUnitIndividualID'] ); ?>" == 'notIndividual'){
              sfUnitIndividualID = 'notIndividual';
              $("#unitIndividual").html( 'Choose <br>UCLA <br>Login' );
              document.getElementById('unitIndividual').className = 'show ui basic rgba(255, 255, 255, 0.15) button label';
              $sfUnitGroupLabel = "<?php print( $page['sfUnitGroupLabel'] ); ?>";
              $("#unitGroup").html( $sfUnitGroupLabel );
              document.getElementById('unitGroup').value = document.getElementById("sfUnitGroupID").dataset.value;
              document.getElementById('unitGroup').className = 'show ui green button';
            }
            // apply the user selections OBTAINED from the preLogin page


            $('.combo.dropdown')
              .dropdown({
                action: 'combo'
              })
            ;

//            $('.dropdown')
//              .dropdown({
//                // you can use any ui transition
//                transition: 'drop'
//              })
//            ;

            /// Tabs
            $('.menu .item').tab(
              { evaluateScripts : 'true',
                'onVisible':function(){
                  fromTab = 1;

                  resetForms();
                  document.getElementById("submitQuickQuestions").disabled = true;
                  //document.getElementById("servicePoint").click();
                }
              }
            );

            // focus the tab when reLogin
            if( document.getElementById('sfResearchTabValue').dataset.value == 1 ){
              document.getElementById('tabResearchAssistance').className = 'ui bottom attached tab active';
              document.getElementById('tabQuickQuestions').className = 'ui bottom attached tab';
              resetForms();
            } else {  
              document.getElementById('tabResearchAssistance').className = 'ui bottom attached tab';
              document.getElementById('tabQuickQuestions').className = 'ui bottom attached active tab';
            }


            // disable submissionbuttons on load of FORM page
            document.getElementById("submitQuickQuestions").disabled = true;
            document.getElementById("submitResearchAssistance").disabled = true;

          }
          // the following section applies to the FORM page only


          //////////// the following section applies to the BOTH pages

            // date/time section
            var $padTime = $('#inputTime').pickatime({
              closeOnSelect: true,
              format: 'h:i a',
              formatSubmit: 'HH:i',
              hiddenName: true,
              editable: false,
              interval: 60,
              onClose: function() {
                // hold the selected time for x minutes
                sfIntervalTime = 5;
                // prevent pickatime from popping open when page is re-focused
                $(document.activeElement).blur();
              }
            });

            var $padDate = $('#inputDatetime').pickadate({
              format: 'dd mmm',
              formatSubmit: 'yyyy-mm-dd',
              hiddenName: true,
              selectYears: 2,
              selectMonths: true,
              onClose: function() {
                // prevent pickadate from popping open when page is re-focused
                $(document.activeElement).blur();
              }
            });

            // updates date/time display every 60 sec and runs on init; extends to 5 minutes (ajustable) if user chooses a new submit time
            function fn60secTimer() {
              if( sfIntervalTime == 1 ){
                var sfDate = new Date();
                var sfTimeOptions = { hour: 'numeric', minute: 'numeric'};
                var sfTimeDisplay = new Intl.DateTimeFormat('en-AU', sfTimeOptions).format(sfDate);
                document.getElementById("inputTime").value = sfTimeDisplay;
                var sfDateOptions = { day: 'numeric', month: 'short'};
                var sfDateDisplay = new Intl.DateTimeFormat('en-AU', sfDateOptions).format(sfDate);
                document.getElementById("inputDatetime").value = sfDateDisplay;
                // format is like this: 2017-09-08
                sfDateSubmit = sfDate.yyyymmdd();
              } else if ( sfIntervalTime > 1 ){
                sfIntervalTime -= 1;
              }
            }
            fn60secTimer();
            sfInterval = setInterval(fn60secTimer, 60*1000);
            // date/time section

            // if a button is tapped
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            $(document).on("click", ".show", function () {

              // if Unit button
              if( $(this).attr('id') == "result" ) {
                fromTab = 0;
                modal = 'libraryUnits';

              // else if Service Point button is tapped before Unit is set
              } else if( ($(this).attr('id') == "servicePoint") && (result.textContent == "Choose Library Unit") ) {
                alert("Please choose a Library Unit first.");
    //            modal = 'libraryMsg';

              // else if Service Point button is clicked after Unit is set
              } else if( $(this).attr('id') == "servicePoint" ) {

                // remove any &nbsp; from 1-line or 2-line labels
                tc_copy = result.textContent;
                tc_copy = tc_copy.replace(/^Clark Library.*/, "Clark Library");
                tc_copy = tc_copy.replace(/^East Asian.*/, "East Asian");
                tc_copy = tc_copy.replace(/^Rieber Hall.*/, "Rieber Hall");
                tc_copy = tc_copy.replace(/^ Law.*/, "Law");
                tc_copy = tc_copy.replace(/^ Management.*/, "Management");
                tc_copy = tc_copy.replace(/^ Music.*/, "Music");
                tc_copy = tc_copy.replace(/^ SEL.*/, "SEL");
                tc_copy = tc_copy.replace(/^ SRLF.*/, "SRLF");
                tc_copy = tc_copy.replace(/^ YRL.*/, "YRL");
                tc_copy = tc_copy.replace(/^ Arts.*/, "Arts");
                tc_copy = tc_copy.replace(/^ Biomed.*/, "Biomed");
                tc_copy = tc_copy.replace(/^ Powell.*/, "Powell");

                // Display extra message when switching between Quick Search and Research Questions
                if( fromTab==1 ){
                  fromTab = 0;
                  $(".header.tab-switch").show();
                } else {
                  $(".header.tab-switch").hide();
                }

                // set the modal that matches the Unit
                switch (tc_copy) {
                  // Arts
                  case 'Arts':
                    modal = 'unitArts';
                    break;
                  // Biomed Access Delivery Services, Biomed Reference
                  case 'Biomed':
                    modal = 'unitBiomed';
                    break;
                  // Biomed History and Special Collections, YRL Special Collections
                  case 'Library Special Collections':
                    modal = 'unitLibrarySpecialCollections';
                    break;
                  // Clark Library
                  case 'Clark Library':
                    modal = 'unitClark';
                    break;
                  // Powell
                  case 'Powell':
                    modal = 'unitPowell';
                    break;
                  // Digital Library Program
                  case 'Digital Library Program':
                    modal = 'unitDigitalLibraryProgram';
                    break;
                  // East Asian
                  case 'East Asian':
                    modal = 'unitEastAsian';
                    break;
                  // Law
                  case 'Law':
                    modal = 'unitLaw';
                    break;
                  // Management
                  case 'Management':
                    modal = 'unitManagement';
                    break;
                  // Music
                  case 'Music':
                    modal = 'unitMusic';
                    break;
                  // Rieber Hall
                  case 'Rieber Hall':
                    modal = 'unitRieberHall';
                    break;
                  // SEL EMS, SEL Geology/Geophysics
                  case 'SEL':
                    modal = 'unitSel';
                    break;
                  // SRLF
                  case 'SRLF':
                    modal = 'unitSrlf';
                    break;
                  // Social Science Data Archive
                  case 'Social Science Data Archive':
                    modal = 'unitSocialScienceDataArchive';
                    break;
                  // YRL Access Services, YRL/CRIS
                  case 'YRL':
                    modal = 'unitYrl';
                    break;
                }

              // else if Individual Login was tapped
              } else if( $(this).attr('id') == "unitIndividual" ) {
                //////////// the following section applies to the FORM pages
                if( <?php print( $page['sf_page_name'] ); ?> == 222 ) {
                  modal = 'changeLoginModal';
                } else {
                  modal = 'individualLogin';
                }

              // else if Group Login was tapped
              } else if( $(this).attr('id') == "unitGroup" ) {
                if( <?php print( $page['sf_page_name'] ); ?> == 222 ) {
                  modal = 'changeLoginModal';
                } else {
                  modal = 'groupLogin';
                }

              // else if the Submit button was clicked
              } else if( $(this).attr('id') == "submit0" ) {
                return false;
              }

              $('#'+modal+'.modal').modal("setting", {
                closable: false,
                onApprove: function () {
                  return false;
                }
              }).modal("show");

            // on button tap
            }).on("click", ".ui.button", function () {

              // respond to the item tapped on in the modal
              switch ($(this).data("value")) {

                //////////////////////////////////////////////////////////////////////////////////////
                // Unit selection from the modal named libraryUnits (note: some sfUnitPointID are 
                //  set/reset in the Service Point selection area (next area)

                // Arts
                case 'Arts':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'ART00';
                  $("#result").html(" <br>Arts <br>&nbsp;");
                  document.getElementById('result').className = 'show ui pink button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;

                // Biomed Access Delivery Services, Biomed Reference
                case 'Biomed':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'BIO01';
                  $("#result").html(" <br>Biomed <br>&nbsp;");
                  document.getElementById('result').className = 'show ui gray button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;

                // Biomed History and Special Collections, YRL Special Collections
                case 'Library Special Collections':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'BIO02'; // this may be overridden by the _unit_ case below
                  $("#result").html("Library <br>Special <br>Collections");
                  document.getElementById('result').className = 'show ui brown button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;

                // Clark Library
                case 'Clark Library':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'CLK00';
                  $("#result").html("Clark <br>Library <br> &nbsp;");
                  document.getElementById('result').className = 'show ui brown button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;

                // Powell
                case 'Powell':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'COL00';
                  $("#result").html(" <br>Powell <br>&nbsp;");
                  document.getElementById('result').className = 'show ui green button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                // Digital Library Program
                case 'Digital Library Program':
                  $("#result").html("Digital <br>Library <br>Program");
                  document.getElementById('result').className = 'show ui blue button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                //
                case 'East Asian':
                  $("#result").html("East <br>Asian <br>&nbsp;");
                  document.getElementById('result').className = 'show ui tan button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                // LAW
                case 'Law':
                  $("#result").html(" <br>Law <br>&nbsp;");
                  document.getElementById('result').className = 'show ui mauve button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                // Management
                case 'Management':
                  $("#result").html(" <br>Management <br>&nbsp;");
                  document.getElementById('result').className = 'show ui orange button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                // Music
                case 'Music':
                  $("#result").html(" <br>Music <br>&nbsp;");
                  document.getElementById('result').className = 'show ui tan button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                // Rieber Hall
                case 'Rieber Hall':
                  $("#result").html("Rieber <br>Hall <br>&nbsp;");
                  document.getElementById('result').className = 'show ui silver button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                // SEL EMS, SEL Geology/Geophysics
                case 'SEL':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'SEL01';
                  $("#result").html(" <br>SEL <br>&nbsp;");
                  document.getElementById('result').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                // SRLF
                case 'SRLF':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'SRL00';
                  $("#result").html(" <br>SRLF <br>&nbsp;");
                  document.getElementById('result').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                // Social Science Data Archive
                case 'Social Science Data Archive':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'SSD01';
                  $("#result").html("Social <br>Science <br>Data Archive");
                  document.getElementById('result').className = 'show ui tan button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                // YRL Access Services AND YRL/CRIS (may be changed in the Service Point Case statement below)
                case 'YRL':
                  $("#result").html(" <br>YRL <br>&nbsp;");
                  document.getElementById('result').className = 'show ui white button';
                  $(".ui.modal").modal("hide");
                  document.getElementById('servicePoint').className = 'show basic ui black button';
                  $("#servicePoint").html("Choose <br>Service <br>Point");
                  document.getElementById("servicePoint").disabled = false;
                  break;
    
                //////////////////////////////////////////////////////////////////////////////////////
                // Service Point selection from the appropriate unit modal
    
                // Access Services - A-level service desk
                case 'Access Services - A-level service desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'YRL07';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "13";
                  $("#servicePoint").html("Access Serv. <br>A-Level <br>Service Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // HSS/IS, Reference desk
                case 'HSS/IS, Reference desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'YRL08';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "01";
                  $("#servicePoint").html("HSS/IS <br>Reference <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // HSS/IS, Off-desk
                case 'HSS/IS, Off-desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'YRL08';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "02";
                  $("#servicePoint").html("HSS/IS <br>Off-Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'SEL Geology, Circulation Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'SEL03';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "03";
                  $("#servicePoint").html("SEL Geology <br>Circulation <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'SEL Boelter, Circulation Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'SEL01';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "03";
                  $("#servicePoint").html("SEL Boelter <br>Circulation <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
    
                //
                case 'Rieber Hall 115':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'RBR00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "14";
                  $("#servicePoint").html("Rieber <br>Hall <br>115");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'Entrance Foyer':
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "06";
                  $("#servicePoint").html("Entrance <br>Foyer <br> <br>");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'InqLab1 (research and writing help)':
                  $("#servicePoint").html(" <br>InqLab1 <br> <br>");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Office
                case 'Office':
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "08";
                  $("#servicePoint").html("&nbsp; <br>Office <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Social Science Data Archive Office
                case 'Social Science Data Archive Office':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'SSD01';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "08";
                  $("#servicePoint").html("&nbsp; <br>Office <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Inquiry Desk
                case 'Inquiry Desk':
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "05";
                  $("#servicePoint").html("Inquiry <br>Desk <br> <br>");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Off-desk
                case 'Off-desk':
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "02";
                  $("#servicePoint").html("&nbsp; <br>Off-Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Biomed Off-desk
                case 'Biomed Off-desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'BIO04';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "02";
                  $("#servicePoint").html("&nbsp; <br>Off-Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // DLP Off-desk
                case 'DLP Off-desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'DLP00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "02";
                  $("#servicePoint").html("&nbsp; <br>Off-Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // East Asian Off-desk
                case 'East Asian Off-desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'EAL00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "02";
                  $("#servicePoint").html("&nbsp; <br>Off-Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Management Off-desk
                case 'Management Off-desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'MAN00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "02";
                  $("#servicePoint").html("&nbsp; <br>Off-Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Music Off-desk
                case 'Music Off-desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'MUS00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "02";
                  $("#servicePoint").html("&nbsp; <br>Off-Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // LSC Off-desk
                case 'LSC Off-desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'YRL03';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "02";
                  $("#servicePoint").html("LSC <br>Off-desk <br> <br>");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // SEL Boelter, Off-desk
                case 'SEL Boelter, Off-desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'SEL01';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "02";
                  $("#servicePoint").html("SEL <br>Boelter <br>Off-desk <br>");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'LSC Biomed':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'BIO02';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "08";
                  $("#servicePoint").html("LSC <br>Biomed <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui yellow button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // The Circulation Desk
                case 'The Circulation Desk':
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "03";
                  $("#servicePoint").html("The <br>Circulation <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Law Circulation Desk
                case 'Law Circulation Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'LAW00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "03";
                  $("#servicePoint").html("Law <br>Circulation <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Arts Circulation Desk
                case 'Arts Circulation Desk':
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "03";
                  document.getElementById('sfServicePointID').dataset.value = "03";
                  $("#servicePoint").html("Arts <br>Circulation <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Biomed Circulation Desk
                case 'Biomed Circulation Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'BIO01';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "03";
                  $("#servicePoint").html("Biomed <br>Circulation <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Management Circulation Desk
                case 'Management Circulation Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'MAN00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "03";
                  $("#servicePoint").html("Management <br>Circulation <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Music Circulation Desk
                case 'Music Circulation Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'MUS00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "03";
                  $("#servicePoint").html("Music <br>Circulation <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // SRLF Circulation Desk
                case 'SRLF Circulation Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'SRL00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "03";
                  $("#servicePoint").html("SRLF <br>Circulation <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // YRL Access Services Circulation Desk
                case 'YRL Access Services Circulation Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'YRL07';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "03";
                  $("#servicePoint").html("YRL <br>Circulation <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'Reference Desk':
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "01";
                  $("#servicePoint").html("Reference <br>Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Biomed Reference Desk
                case 'Biomed Reference Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'BIO04';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "01";
                  $("#servicePoint").html("Reference <br>Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // LSC YRL Reference desk
                case 'LSC YRL Reference desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'YRL03';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "01";
                  $("#servicePoint").html("LSC YRL <br>Reference <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Law Reference desk
                case 'Law Reference Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'LAW00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "01";
                  $("#servicePoint").html("Reference <br>Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Management Reference desk
                case 'Management Reference Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'MAN00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "01";
                  $("#servicePoint").html("Reference <br>Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // Music Reference desk
                case 'Music Reference Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'MUS00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "01";
                  $("#servicePoint").html("Reference <br>Desk <br>&nbsp;");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // SEL Boelter, Reference Desk
                case 'SEL Boelter, Reference Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'SEL01';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "01";
                  $("#servicePoint").html("SEL Boelter <br>Reference <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'Reference Desk, 2nd Flr':
                  $("#servicePoint").html("Reference <br>Desk, <br>2nd Flr");
                  document.getElementById('servicePoint').className = 'show ui black button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'Science and Engineering Library Service':
                  $("#servicePoint").html("SEL <br>Library <br>Service");
                  document.getElementById('servicePoint').className = 'show ui brown button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'A-Level Service Desk':
                  $("#servicePoint").html("A-Level <br>Service <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui brown button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // The Information Desk
                case 'The Information Desk':
                  $("#servicePoint").html("The <br>Information <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui gray button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                // East Asian Information Desk
                case 'East Asian Information Desk':
                  document.getElementById('sfUnitPointID').dataset.value = sfUnitPointID = 'EAL00';
                  document.getElementById('sfServicePointID').dataset.value = sfServicePointID = "07";
                  $("#servicePoint").html("The <br>Information <br>Desk");
                  document.getElementById('servicePoint').className = 'show ui gray button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'The Cashier Window':
                  $("#servicePoint").html("The <br>Cashier <br>Window");
                  document.getElementById('servicePoint').className = 'show ui olive button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //
                case 'Phone Answering Station':
                  $("#servicePoint").html("Phone <br>Answering <br>Station");
                  document.getElementById('servicePoint').className = 'show ui pink button';
                  $(".ui.modal").modal("hide");
                  document.getElementById("unitIndividual").disabled = false;
                  document.getElementById("unitGroup").disabled = false;
                  break;
    
                //////////////////////////////////////////////////////////////////////////////////////
                // Login, individual section
                //
                case 'UCLA Login':
                  $("#unitIndividual").html("Set to use <br>UCLA <br>Login");
                  document.getElementById('unitIndividual').className = 'show ui green button';
                  document.getElementById('unitGroup').className = 'show ui basic rgba(255, 255, 255, 0.15) button label';
                  $("#unitGroup").html("Choose <br>Group <br>Login");
                  sfUnitIndividualID = 'individual';
                  sfUnitIndividualLabel = 'Set to use <br>UCLA <br>Login';
                  sfUnitIndividualColor = 'show ui positive button';
                  sfUnitGroupID = '';
                  sfUnitGroupLabel = 'Choose <br>Group <br>Login';
                  sfUnitGroupColor = 'show ui basic rgba(255, 255, 255, 0.15) button label';
                  $(".ui.modal").modal("hide");
                  document.getElementById("submit0").disabled = false;
                  break;
    
                //////////////////////////////////////////////////////////////////////////////////////
                // Login selection, group selection
                //
                case ($(this).data("value").match(/^sfGroup/) || {}).input:
                  sfGroupVals = $(this).data("value").split("_");
                  $("#unitGroup").html(sfGroupVals[2].wrap(20));
                  document.getElementById('unitGroup').className = 'show ui green button label';
                  document.getElementById('unitIndividual').className = 'show ui basic rgba(255, 255, 255, 0.15) button';
                  $("#unitIndividual").html("Choose <br>Single <br>Login");

                  sfUnitGroupID = sfGroupVals[1];
                  document.getElementById('unitGroup').value = sfGroupVals[1];
                  document.getElementById('sfUnitGroupID').value = sfGroupVals[1];

                  sfUnitGroupLabel = sfGroupVals[2].wrap(20);
                  document.getElementById('sfUnitGroupLabel').dataset.value = sfGroupVals[2].wrap(20);

                  sfUnitGroupColor = 'show ui positive button label';
                  sfUnitIndividualID = 'notIndividual';
                  sfUnitIndividualLabel = 'Choose <br>Single <br>Login';
                  sfUnitIndividualColor = 'show ui basic rgba(255, 255, 255, 0.15)';
                  $(".ui.modal").modal("hide");
                  document.getElementById("submit0").disabled = false;
                  break;
    
                //////////////////////////////////////////////////////////////////////////////////////
                // Login, reLogin Cancel
                //
                case ($(this).data("value").match(/^reLoginCancel/) || {}).input:
                  // location.href = 'https://www.library.ucla.edu';
                  $(".ui.modal").modal("hide");
                  document.getElementById("submit0").disabled = false;
                  break;



                // Re-login here
                //
                case ($(this).data("value").match(/^reLoginHere/) || {}).input:

                  // detect active tab
                  var sfResearchTabValueFlag = "0";
                  var isActive = 0;

                  if ( document.getElementById('tabResearchAssistance').className.match(/active$/) ) {
                    isActive = document.getElementById('tabResearchAssistance').className.match(/active$/);
                    if ( isActive[0] == 'active' ) {
                      sfResearchTabValueFlag = "1";
                    }
                  } else {
                    sfResearchTabValueFlag = "0";
                  }
                  // if not null and "active"

                  // collect user choices
                  var sfUnitColor = document.getElementById('result').className;
                  var sfServicePointColor = document.getElementById('servicePoint').className;
                  var sfUnitColorArray = sfUnitColor.split(" ");
                  var sfServicePointColorArray = sfServicePointColor.split(" ");
                  sfUnitColor = sfUnitColorArray[2];
                  sfServicePointColor = sfServicePointColorArray[2];
    //            var sfGroupLogonID = groupLogonID;
                  var reloginhereflag = 1;

                  // normal: a new group was chosen
                  if (typeof document.getElementById('sfUnitGroupID').value !== 'undefined') {
                  // create and make request with query string
                  location.href = '/statsform/login?sfUnit='+document.getElementById('sfUnit').dataset.value+'&sfUnitPointID='+document.getElementById('sfUnitPointID').dataset.value+'&sfServicePointID='+document.getElementById('sfServicePointID').dataset.value+'&sfServicePoint='+servicePoint.textContent+'&sfUnitColor='+sfUnitColor+'&sfServicePointColor='+sfServicePointColor+'&sfUnitIndividualID='+sfUnitIndividualID+'&sfUnitIndividualLabel='+document.getElementById('sfUnitIndividualLabel').dataset.value+'&sfUnitIndividualColor='+document.getElementById('sfUnitIndividualColor').dataset.value+'&sfUnitGroupID='+document.getElementById('sfUnitGroupID').value+'&sfUnitGroupLabel='+document.getElementById('sfUnitGroupLabel').dataset.value+'&sfUnitGroupColor='+document.getElementById('sfUnitGroupColor').dataset.value+'&sfSession=false'+'&reloginhereflag='+reloginhereflag+'&sfResearchTabValue='+sfResearchTabValueFlag;
    
                  // unusual: a new group was NOT chosen
                  } else {
                  // create and make request with query string
                  location.href = '/statsform/login?sfUnit='+document.getElementById('sfUnit').dataset.value+'&sfUnitPointID='+document.getElementById('sfUnitPointID').dataset.value+'&sfServicePointID='+document.getElementById('sfServicePointID').dataset.value+'&sfServicePoint='+servicePoint.textContent+'&sfUnitColor='+sfUnitColor+'&sfServicePointColor='+sfServicePointColor+'&sfUnitIndividualID='+sfUnitIndividualID+'&sfUnitIndividualLabel='+document.getElementById('sfUnitIndividualLabel').dataset.value+'&sfUnitIndividualColor='+document.getElementById('sfUnitIndividualColor').dataset.value+'&sfUnitGroupID='+document.getElementById('sfUnitGroupID').dataset.value+'&sfUnitGroupLabel='+document.getElementById('sfUnitGroupLabel').dataset.value+'&sfUnitGroupColor='+document.getElementById('sfUnitGroupColor').dataset.value+'&sfSession=false'+'&reloginhereflag='+reloginhereflag+'&sfResearchTabValue='+sfResearchTabValueFlag;
                  }

                  $('.ui.united.large.reLoginConfSpinner.modal')
                    .modal('setting', 'closable', false)
                    $('#reLoginConfSpinner').modal('show')
                  ;
                  // $(".ui.modal").modal("hide");
                  break;

                // Login, reLogin
                //
                case ($(this).data("value").match(/^reLogin/) || {}).input:
                  location.href = '/services/statsformLogin?reLogin=1';
                  $('.ui.united.large.reLoginConfSpinner.modal')
                    .modal('setting', 'closable', false)
                    $('#reLoginConfSpinner').modal('show')
                  ;
                  // $(".ui.modal").modal("hide");
                  break;

                // Logout section
                //
                case ($(this).data("value").match(/^logout/) || {}).input:
                  location.href = '/statsform/logout';
//                  $(".ui.modal").modal("hide");

                  $('.ui.united.large.reLoginConfSpinner.modal')
                    .modal('setting', 'closable', false)
                    $('#reLoginConfSpinner').modal('show')
                  ;

                  document.getElementById("submit0").disabled = false;
                  break;

              }
              // respond to the item tapped on in the modal
    
    
              // disable the submit button "Go to Login" if Unit or Service Point or Login Type are not set chosen - else enable
              if( (document.getElementById("result").textContent == "Choose Library Unit") || (document.getElementById("servicePoint").textContent == "Choose Service Point") || ((document.getElementById("unitIndividual").textContent == "Choose Single Login") && (document.getElementById("unitGroup").textContent == "Choose Group Login")) ) {
    
                document.getElementById("submit0").disabled = true;
              } else {
                document.getElementById("submit0").disabled = false;
              }
            });
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            // if a button is tapped


            // Semanti-UI icon names to choose from for group modal, possibly other modals
            // This set is used
            var semanticIconsActive = ["bell","bell outline","bookmark","bookmark outline","calendar","calendar outline","circle","circle outline","heart","heart outline","square","square outline","star","star outline"];

            // Complete set
            var semanticIcons = [ 
"search","mail outline","external","signal","setting","home","inbox","browser","tag","tags","calendar","comment","comments","shop","privacy","settings","trophy","payment","feed","alarm outline","tasks","cloud","lab","mail","idea","dashboard","sitemap","alarm","terminal","code","protect","calendar outline","ticket","external square","map","bug","mail square","history","options","comment outline","comments outline","text telephone","find","wifi","alarm slash","alarm slash outline","copyright","at","eyedropper","paint brush","heartbeat","download","repeat","refresh","lock","bookmark","print","write","theme","adjust","edit","external share","ban","mail forward","share","expand","compress","unhide","hide","random","retweet","sign out","pin","sign in","upload","call","call square","remove bookmark","unlock","configure","filter","wizard","undo","exchange","cloud download","cloud upload","reply","reply all","erase","unlock alternate","archive","translate","recycle","send","send outline","share alternate","share alternate square","wait","write square","share square","add to cart","in cart","add user","remove user","help circle","info circle","warning","warning circle","warning sign","help","info","announcement","birthday","users","doctor","child","user","handicap","student","spy","female","male","woman","man","non binary transgender","intergender","transgender","lesbian","gay","heterosexual","other gender","other gender vertical","other gender horizontal","neuter","grid layout","list layout","block layout","zoom","zoom out","resize vertical","resize horizontal","maximize","crop","cocktail","road","flag","book","gift","leaf","fire","plane","magnet","legal","lemon","world","travel","shipping","money","lightning","rain","treatment","suitcase","bar","flag outline","flag checkered","puzzle","fire extinguisher","rocket","anchor","bullseye","sun","moon","fax","life ring","bomb","soccer","calculator","diamond","crosshairs","asterisk","certificate","circle","quote left","quote right","ellipsis horizontal","ellipsis vertical","cube","cubes","circle notched","circle thin","square outline","square","checkmark","remove","checkmark box","move","add circle","minus circle","remove circle","check circle","remove circle outline","check circle outline","plus","minus","add square","radio","selected radio","minus square","minus square outline","check square","plus square outline","toggle off","toggle on","film","sound","photo","bar chart","camera retro","newspaper","area chart","pie chart","line chart","arrow circle outline down","arrow circle outline up","chevron left","chevron right","arrow left","arrow right","arrow up","arrow down","chevron up","chevron down","pointing right","pointing left","pointing up","pointing down","arrow circle left","arrow circle right","arrow circle up","arrow circle down","caret down","caret up","caret left","caret right","angle double left","angle double right","angle double up","angle double down","angle left","angle right","angle up","angle down","chevron circle left","chevron circle right","chevron circle up","chevron circle down","toggle down","toggle up","toggle right","long arrow down","long arrow up","long arrow left","long arrow right","arrow circle outline right","arrow circle outline left","toggle left","power","trash","trash outline","disk outline","desktop","laptop","tablet","mobile","game","keyboard","plug","folder","folder open","level up","level down","file","file outline","file text","file text outline","folder outline","folder open outline","file pdf outline","file word outline","file excel outline","file powerpoint outline","file image outline","file archive outline","file audio outline","file video outline","file code outline","barcode","qrcode","fork","html5","css3","rss","rss square","openid","database","server","heart","star","empty star","thumbs outline up","thumbs outline down","star half","empty heart","smile","frown","meh","star half empty","thumbs up","thumbs down","music","video play outline","volume off","volume down","volume up","record","step backward","fast backward","backward","play","pause","stop","forward","fast forward","step forward","eject","unmute","mute","video play","closed captioning","marker","coffee","food","building outline","hospital","emergency","first aid","military","h","location arrow","space shuttle","university","building","paw","spoon","car","taxi","tree","bicycle","bus","ship","motorcycle","street view","hotel","train","subway","table","columns","sort","sort ascending","sort descending","sort alphabet ascending","sort alphabet descending","sort content ascending","sort content descending","sort numeric ascending","sort numeric descending","font","bold","italic","text height","text width","align left","align center","align right","align justify","list","outdent","indent","linkify","cut","copy","attach","save","content","unordered list","ordered list","strikethrough","underline","paste","unlink","superscript","subscript","header","paragraph","euro","pound","dollar","rupee","yen","ruble","won","lira","shekel","paypal","paypal card","google wallet","visa","mastercard","discover","american express","stripe","twitter square","facebook square","linkedin square","github square","twitter","facebook","github","pinterest","pinterest square","google plus square","google plus","linkedin","github alternate","maxcdn","bitcoin","youtube square","youtube","xing","xing square","youtube play","dropbox","stack overflow","instagram","flickr","adn","bitbucket","bitbucket square","tumblr","tumblr square","apple","windows","android","linux","dribbble","skype","foursquare","trello","gittip","vk","weibo","renren","pagelines","stack exchange","vimeo","slack","wordpress","yahoo","google","reddit","reddit square","stumbleupon circle","stumbleupon","delicious","digg","pied piper","pied piper alternate","drupal","joomla","behance","behance square","steam","steam square","spotify","deviantart","soundcloud","vine","codepen","jsfiddle","rebel","empire","git square","git","hacker news","tencent weibo","qq","wechat","slideshare","twitch","yelp","lastfm","lastfm square","ioxhost","angellist","meanpath","buysellads","connectdevelop","dashcube","forumbee","leanpub","sellsy","shirtsinbulk","simplybuilt","skyatlas","whatsapp","viacoin","medium","like","favorite","video","check","close","cancel","delete","x","user times","user close","user cancel","user delete","user x","zoom in","magnify","shutdown","clock","time","play circle outline","headphone","camera","video camera","picture","pencil","compose","point","tint","signup","plus circle","dont","minimize","add","eye","attention","cart","shuffle","talk","chat","shopping cart","bar graph","area graph","pie graph","line graph","key","cogs","discussions","like outline","dislike outline","heart outline","log out","thumb tack","winner","bookmark outline","phone","phone square","credit card","hdd outline","bullhorn","bell","bell outline","bell slash","bell slash outline","hand outline right","hand outline left","hand outline up","hand outline down","globe","wrench","briefcase","group","flask","sidebar","bars","list ul","list ol","numbered list","magic","truck","currency","triangle down","dropdown","triangle up","triangle left","triangle right","envelope","conversation","umbrella","clipboard","lightbulb","ambulance","medkit","fighter jet","beer","plus square","computer","circle outline","intersex","asexual","spinner","gamepad","star half full","question","eraser","microphone","microphone slash","shield","target","play circle","pencil square","compass","amex","eur","gbp","usd","inr","cny","rmb","jpy","rouble","rub","krw","btc","sheqel","ils","try","zip","dot circle outline","sliders","wi-fi","graduation","weixin","binoculars","gratipay","genderless","teletype","power cord","tty","cc","plus cart","arrow down cart","detective","venus","mars","mercury","venus double","female homosexual","mars double","male homosexual","venus mars","mars stroke","mars alternate","mars vertical","mars horizontal","mars stroke vertical","mars stroke horizontal","facebook official","pinterest official","bed"];

          // populate the modal with users/groups with data from Web Services collected in the Drupal module
          var cnt = 0;
          usersArray = new Array();
          var sf_groupList_vals = <?php print( $page['sf_groupList'] ); ?>;
          $.each(sf_groupList_vals.users,function(key,innerjson){
            // leading div name="..." is for sorting purposes
            usersArray[cnt] = "<div name='" + innerjson.Name + "'><div class='actions'><div class='ui approve button' data-value='sfGroups_" + innerjson.LogonID + "_" + innerjson.Name + "'><div class='ui card'><div class='blurring dimmable image'><div class='ui center'><i class='huge " + semanticIconsActive[cnt] + " icon'></i></div><div class='ui fluid large label'><center>" + innerjson.Name + "</center></div></div></div></div></div></div>"; 
            cnt+=1;
          });
          usersArray.sort();
          usersArray.forEach(function(entry) {
            $("#albums1").append(entry);
          });

        // PROTOTYPES
        // used to set the yyy-mmm-dd in ISO format
        Date.prototype.yyyymmdd = function() {
          var mm = (this.getMonth() + 1).toString(); // getMonth() is zero-based
          var dd = this.getDate().toString();
          return [this.getFullYear(), mm.length===2 ? '-' : '-0', mm, dd.length===2 ? '-' : '-0', dd].join(''); // padding
        };

        String.prototype.wrap= function(len){
          var temp = this.split(/\s+/);
          var res = "";
          index = 1;
          temp.forEach(function(entry) {
            if( res.length + entry.length > index*len ){
              res = res + "<br>";
              index += 1;
            }
            if( res.length == 0 ){
              res = entry;
            } else {
              res = res + " " + entry;
            }
          });
          return res;
        };

          //////////// the following section applies to the BOTH pages

          //////////// the following section applies to the PRELOGIN pages
          if( <?php print( $page['sf_page_name'] ); ?> == 0 ) {

            // SUBMIT Section for Go To Login -------------------------------------------------------------------------------------------------------
            // SUBMIT Section for Go To Login -------------------------------------------------------------------------------------------------------
              $('#submit0').click(function() {

              // collect user choices
              var sfUnitColor = document.getElementById('result').className;
              var sfServicePointColor = document.getElementById('servicePoint').className;
              var sfUnitColorArray = sfUnitColor.split(" ");
              var sfServicePointColorArray = sfServicePointColor.split(" ");
              sfUnitColor = sfUnitColorArray[2];
              sfServicePointColor = sfServicePointColorArray[2];
//            var sfGroupLogonID = groupLogonID;

              // create and make request with query string
              location.href = '/statsform/login?sfUnit='+result.textContent+'&sfUnitPointID='+sfUnitPointID+'&sfServicePointID='+sfServicePointID+'&sfServicePoint='+servicePoint.textContent+'&sfUnitColor='+sfUnitColor+'&sfServicePointColor='+sfServicePointColor+'&sfUnitIndividualID='+sfUnitIndividualID+'&sfUnitIndividualLabel='+sfUnitIndividualLabel+'&sfUnitIndividualColor='+sfUnitIndividualColor+'&sfUnitGroupID='+sfUnitGroupID+'&sfUnitGroupLabel='+sfUnitGroupLabel+'&sfUnitGroupColor='+sfUnitGroupColor+'&sfSession=false';
            });
          }
          //////////// the following section applies to the PRELOGIN pages

        });
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // Actions to perform on page load
        // Actions to perform on page load


        //////////// the following section applies to the Form page only
        if( <?php print( $page['sf_page_name'] ); ?> == 2 ) {

          // ajax section
          // ajax section
          // ajax section
          //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
          //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

          (function ($) {

          Drupal.behaviors.statsformAjax = {
            attach: function (context, settings) {

              // Bind an AJAX callback for the Submit buttons on the Quick Questions and Research Assistance pages
              var ajaxQuickQuestions = $('#submitQuickQuestions');
              var ajaxResearchAssistance = $('#submitResearchAssistance');
              var statsformLogoutLink = $('#logout');

              // SUBMIT Section for Quick Search .................................................................
              // SUBMIT Section for Quick Search .................................................................
              ajaxQuickQuestions.click(function(event) {

                // Prevent the default link action
                event.preventDefault();

                //  disable submission if none of the count boxes have been incremented past 0
                if( document.getElementById("directional").textContent == 0  && document.getElementById("lookUp").textContent == 0  && document.getElementById("policyVal").textContent == 0  && document.getElementById("referralCount").textContent == 0  && document.getElementById("technicalVal").textContent == 0 ){
                  document.getElementById("submitQuickQuestions").disabled = true;

                // proceed if one or count boxes were incremented
                } else {

                  // debug alerts
                  //alert(document.getElementById("sfToken").dataset.value);
                  //alert(document.getElementById("sfUnitPointID").dataset.value);
                  //alert(document.getElementById("sfServicePointID").dataset.value);
                  //alert(sfDateSubmit);
                  //alert(document.getElementById("inputTime").value);
                  //alert(document.getElementById("userName").dataset.value);
                  //alert(document.getElementById("directional").textContent);
                  //alert(document.getElementById("lookUp").textContent);
                  //alert(document.getElementById("policyVal").textContent);
                  //alert(document.getElementById("referralCount").textContent);
                  //alert(document.getElementById("technicalVal").textContent);
  
                  $.ajax({
                    type: "POST",
                    url: "/statsform/ajax",
                    data: {
                      'from_js': true,
                      'sfToken': document.getElementById("sfToken").dataset.value,
                      ///'sfToken': 'badTokenTest',
                      'sfUnitPointID': document.getElementById("sfUnitPointID").dataset.value,
                      'sfServicePointID': document.getElementById("sfServicePointID").dataset.value,
                      'sfInputDatetime': sfDateSubmit,
  ///                    'sfInputDatetime': document.getElementsByName("inputDatetime")[0].value, // simo checkboxes
                      'sfInputTime': ' '+document.getElementById("inputTime").value,
  ///                    'sfInputTime': ' '+document.getElementsByName("inputTime")[0].value,
                      'sfOperator': document.getElementById("sfUserName").dataset.value,
                      'sfTimeSpent': '1',
                      'sfDetailed': 'false', // always false for the Quick Questions session
                      'sfTypeID001': '01',
                      'sfModeID001': '01',
                      'sfDirectional': document.getElementById("directional").textContent,
                      'sfTypeID002': '02',
                      'sfModeID002': '01',
                      'sfLookUp': document.getElementById("lookUp").textContent,
                      'sfTypeID003': '12',
                      'sfModeID003': '01',
                      'sfPolicyVal': document.getElementById("policyVal").textContent,
                      'sfTypeID004': '01',
                      'sfModeID004': '01',
                      'sfReferralCount': document.getElementById("referralCount").textContent,
                      'sfTypeID005': '10',
                      'sfModeID005': '01',
                      'sfTechnicalVal': document.getElementById("technicalVal").textContent,
                    },
                    dataType: "json",
                    success: function (data) {
                      // Display the time from successful response
                      bad_token ="Expired token";
                      if( data ) {
                        if( data.wsResponse ) {
                          if( data.wsResponse.code == 200 ) {
                            alert("Data saved:\n  "+$("#result")[0].textContent.trim()+"\n  "+$("#servicePoint")[0].textContent.trim()+"\n  "+document.getElementById("sfUserName").dataset.value+"\n  "+document.getElementsByName("inputDatetime")[0].value+"\n  "+document.getElementById("inputTime").value);
                            resetForms();
                            document.getElementById("submitQuickQuestions").disabled = true;
                          } else if( data.wsResponse.code == 500 ) {
                            alert("Web service error 500 - Please contact the Help Desk.");
                          } else {
                            alert("Web service error 000  - Please contact the Help Desk.");
                          }
                        } else if( data.message.includes( bad_token ) ) {
                          alert( data.message );
                        }
                      } else {
                        alert("Module error 000  - Please contact the Help Desk: No data available.");
                      }
                    },
                    error: function (xmlhttp) {
                      // Error alert for failure
                      alert("Web service error AJAX - Please contact the Help Desk. " + xmlhttp.status);
                    }
                  });
                }
                // proceed if one or count boxes were incremented
                
              });
              // SUBMIT Section for Quick Search .................................................................
              // SUBMIT Section for Quick Search .................................................................


              // SUBMIT Section for Research Assistance ..........................................................
              // SUBMIT Section for Research Assistance ..........................................................
              ajaxResearchAssistance.click(function(event) {

                // Prevent the default link action
                event.preventDefault();

                // Get the request URL without the query string
                ///var ajaxUrl = ajaxQuickQuestions.attr('href').split('?');

                $.ajax({
                  type: "POST",
                  url: "/statsform/ajax",
                  data: {
                    'from_js': true,
                    'sfToken': document.getElementById("sfToken").dataset.value,
                    /// 'sfToken': 'badTokenTest'
                    'sfUnitPointID': document.getElementById("sfUnitPointID").dataset.value,
                    'sfServicePointID': document.getElementById("sfServicePointID").dataset.value,
                    'sfInputDatetime': sfDateSubmit,
///                    'sfInputDatetime': document.getElementsByName("inputDatetime")[0].value, // simo checkboxes
                    'sfInputTime': ' '+document.getElementById("inputTime").value,
///                    'sfInputTime': ' '+document.getElementsByName("inputTime")[0].value,
                    'sfOperator': document.getElementById("sfUserName").dataset.value,
                    'sfDetailed': 'true', // always true for the Research Assistant session
                    'sfTopic': document.getElementById("exboxQuestionTopic").value,
                    'sfPatronType': document.getElementById("patronStatusInput").value,
                    'sfDeptID': document.getElementById("deptWs").value,
                    'sfComment': document.getElementById("commentTopic").value,
                    'sfCourse': document.getElementById("exboxCourseSection").value,
                    'sfTypeID004': '13',
                    'sfModeID004': document.getElementById("interactionModeInput").value,
                    'sfReferralCount': document.getElementById("referralCheckbox").value,
                    'sfTypeID006': '05',
                    'sfModeID006': document.getElementById("interactionModeInput").value,
                    'sfResearchAsst': document.getElementById("researchCheckbox").value,
                    'sfTypeID005': '10',
                    'sfModeID005': document.getElementById("interactionModeInput").value,
                    'sfTechnicalVal': document.getElementById("technicalCheckbox").value,
                    'sfTypeID002': '02',
                    'sfModeID002': document.getElementById("interactionModeInput").value,
                    'sfLookUp': document.getElementById("lookupCheckbox").value,
                    'sfTypeID001': '01',
                    'sfModeID001': document.getElementById("interactionModeInput").value,
                    'sfDirectional': document.getElementById("directionalCheckbox").value,
                    'sfTypeID003': '12',
                    'sfModeID003': document.getElementById("interactionModeInput").value,
                    'sfPolicyVal': document.getElementById("policyCheckbox").value,
                    'sfPatronCount': document.getElementById("patronCount").textContent,
                    'sfTimeSpent': document.getElementById("minuteCount").textContent,
                  },
                  dataType: "json",
                  success: function (data) {
                    // Display the time from successful response
                      if( data.wsResponse.code == 200 ) {
                        alert("Data saved:\n  "+$("#result")[0].textContent.trim()+"\n  "+$("#servicePoint")[0].textContent.trim()+"\n  "+document.getElementById("sfUserName").dataset.value+"\n  "+document.getElementsByName("inputDatetime")[0].value+"\n  "+document.getElementById("inputTime").value);
                        resetForms();
                        document.getElementById("submitResearchAssistance").disabled = true;
                      } else if( data.wsResponse.code == 500 ) {
                        alert("Web service error 500 - Please contact the Help Desk.");
                      } else {
                        alert("Web service error 000  - Please contact the Help Desk.");
                      }
                  },
                  error: function (xmlhttp) {
                    // Error alert for failure
                    alert("Web service error AJAX - Please contact the Help Desk. " + xmlhttp.status);
                  }
                });
              });
              // SUBMIT Section for Research Assistance .................................................................
              // SUBMIT Section for Research Assistance .................................................................

              // LOGOUT section .........................................................................................
              // LOGOUT section .........................................................................................
              $('.ui.logout.dropdown')
                .dropdown(
                  {
                    // use action in place of onchange to avoid popping up on for reset after the submits
                    action: function(value) {
                      if( value.match(/Logout$/) ){
                        $('.ui.united.large.logoutModal.modal')
                          .modal('setting', 'closable', false)
                          $('#logoutModal').modal('show')
                        ;
                      } else if( value.match(/user\)$/) ){
                        $('.ui.united.large.reLoginHereModal.modal')
                          .modal('setting', 'closable', false)
                          $('#reLoginHereModal').modal('show')
                        ;
                      }


                    }
                  });
              // LOGOUT section .........................................................................................
              // LOGOUT section .........................................................................................


            } // attach
          }; // behaviors
        })(jQuery);
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ajax section
        // ajax section
        // ajax section


        }
        //////////// the following section applies to the Form page only

      </script>
      <!--
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      // STATSFORM SCRIPTS
      // STATSFORM SCRIPTS
      // STATSFORM SCRIPTS
      -->

    </body>
  </html>
</div>
