  <html>

    <head>

      <meta charset="utf-8">
      <title>JS Bin</title>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js" charset="utf-8"></script>
      <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.0/dist/semantic.min.js"></script>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.0/dist/semantic.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.css">
      <link rel="stylesheet" type="text/css" href="/<?php print( $page['sf_path'] ); ?>/templates/responsive-full-background-image.css">
    
      <script type='text/javascript'>
        $(window).load(function(){
          var bcolor = "show huge ui blue button";

          $('#inputTime2').pickatime({
            editable: false,
            interval: 1
          });

          $('#inputTime').pickatime({
            format: 'h:i a',
            formatSubmit: 'HH:i',
            hiddenName: true,
            editable: false,
            interval: 1
          });

          $('#inputDatetime').pickadate({
            format: 'mm/dd/yy',
            formatSubmit: 'dd-yyyy-mm',
            hiddenName: true,
            selectYears: 2,
            selectMonths: true
          });
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
          z-index: 8888;
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
        .ui.message {
          background-color: rgba(255, 255, 255, 0.0);
          border-style: none;
          border-style: hidden;
          border-radius: 8px;
        }
        .ui.buttons {
          background-color: rgba(255, 255, 255, 1.0);
          border-color: black;
          border-radius: 8px;
          border: 1px;
        }
        .ui.button:hover {
          font-weight: bold;
          color: rgba(255, 255, 255, 0.8);
          font-color: #1122ff;
        }
      </style>

    </head>
    <body>
    <!-- HEADER ------------------------------------------------------------------------------------------- -->
    <!-- HEADER ------------------------------------------------------------------------------------------- -->
    <!-- HEADER ------------------------------------------------------------------------------------------- -->
    <div class="ui stackable grid container">
      <div class="row">
        <div class="column">&nbsp;
        </div>
      </div>
      <div class="row">
        <div class="column">&nbsp;
        </div>
      </div>
    </div>

    <div class="ui main stackable grid container">
      <div class="one column row">
        <div class="fluid column">
          <div class="content">
            <div class="ui stackable grid container">
              <div class="one column row">
                <div class="ui massive fluid content">
                  Group Login to StatsForm
                </div>
              </div>
            </div>
          </div>
          <div class="ui center fluid message">
            <div class="content">
              <?php 
                $elements = drupal_get_form("user_login"); 
                $form = drupal_render($elements);
                echo $form;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- HEADER END -->
    <!-- HEADER END -->
    <!-- HEADER END -->

    <div id="sfUnitGroupID" data-value="<?php print( $page['sfUnitGroupID'] ); ?>"></div>

    <!--------------------------------------------------------------------------------->
    <!------- SCRIPTING TEMP LOCATION ------------------------------------------------->
    <!--------------------------------------------------------------------------------->
    <script type="text/javascript">

      // Jquery ready
      $(document).ready(function() {

        // insert the group ID sfUnitGroupID into the Drupal login form
        $sfUnitGroupID = document.getElementById("sfUnitGroupID").dataset.value;
        document.getElementById('edit-name').value = $sfUnitGroupID;

        // focus the password field
        var sfElement = document.getElementById('edit-pass');
        sfElement.focus();
      });
    </script>
    <!--------------------------------------------------------------------------------->
    <!------- SCRIPTING TEMP LOCATION END --------------------------------------------->
    <!--------------------------------------------------------------------------------->

    </body>
  </html>
