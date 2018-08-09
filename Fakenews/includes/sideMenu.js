
<script>
<div ng-controller="AppCtrl" layout="column" style="height:500px;" ng-cloak>

  <section layout="row" flex>

    <md-sidenav
        class="md-sidenav-left"
        md-component-id="left"
        md-is-locked-open="$mdMedia('gt-md')"
        md-whiteframe="4">

      <md-toolbar class="md-theme-indigo">
        <h1 class="md-toolbar-tools">Sidenav Left</h1>
      </md-toolbar>
      <md-content layout-padding ng-controller="LeftCtrl">
        <md-button ng-click="close()" class="md-primary" hide-gt-md>
          Close Sidenav Left
        </md-button>
        <p hide show-gt-md>
          This sidenav is locked open on your device. To go back to the default behavior,
          narrow your display.
        </p>
      </md-content>

    </md-sidenav>

</script>

