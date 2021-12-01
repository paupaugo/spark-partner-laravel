<body class="vertical-layout vertical-menu-modern {{ $configData['showMenu'] === true ? '2-columns' : '1-column' }}
{{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }}
{{ $configData['verticalMenuNavbarType'] }}
{{ $configData['sidebarClass'] }} {{ $configData['footerType'] }}" data-menu="vertical-menu-modern" data-col="{{ $configData['showMenu'] === true ? '2-columns' : '1-column' }}" data-layout="{{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}" style="{{ $configData['bodyStyle'] }}" data-framework="laravel" data-asset-path="{{ asset('/')}}">

  {{-- Include Sidebar --}}
  @if((isset($configData['showMenu']) && $configData['showMenu'] === true))
  @include('panels.sidebar')
  @endif

  {{-- Include Navbar --}}
  @include('panels.navbar')

  <!-- BEGIN: Content-->
  <div class="app-content content {{ $configData['pageClass'] }}">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    @if(($configData['contentLayout']!=='default') && isset($configData['contentLayout']))
    <div class="content-area-wrapper {{ $configData['layoutWidth'] === 'boxed' ? 'container p-0' : '' }}">
      <div class="{{ $configData['sidebarPositionClass'] }}">
        <div class="sidebar">
          {{-- Include Sidebar Content --}}
          @yield('content-sidebar')
        </div>
      </div>
      <div class="{{ $configData['contentsidebarClass'] }}">
        <div class="content-wrapper">
          <div class="content-body">
            {{-- Include Page Content --}}
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="content-wrapper {{ $configData['layoutWidth'] === 'boxed' ? 'container p-0' : '' }}">
      {{-- Include Breadcrumb --}}
      @if($configData['pageHeader'] === true && isset($configData['pageHeader']))
      @include('panels.breadcrumb')
      @endif

      <div class="content-body">
        {{-- Include Page Content --}}
        @yield('content')
      </div>
    </div>
    @endif

  </div>
  <!-- End: Content-->

  @if($configData['blankPage'] == false && isset($configData['blankPage']))
 

  @endif

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  {{-- include footer --}}
  @include('panels/footer')

  {{-- include default scripts --}}
  @include('panels/scripts')

  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14
          , height: 14
        });
      }
    })

  </script>
  <!--Begin Live Chat Code-->
<div id="onlinehelp-button-64fef8e6-0460-45b8-ad2d-5a14427f828a"></div>
<script type="text/javascript">
  var OnlineHelpAPI=OnlineHelpAPI||{};(function(t){function e(e){var a=document.createElement("script"),c=document.getElementsByTagName("script")[0];a.type="text/javascript",a.async=!0,a.src=e+t.site_id,c.parentNode.insertBefore(a,c)}t.chat_buttons=t.chat_buttons||[],t.chat_buttons.push({code_plan:"64fef8e6-0460-45b8-ad2d-5a14427f828a",div_id:"onlinehelp-button-64fef8e6-0460-45b8-ad2d-5a14427f828a"}),t.site_id=60003809,t.main_code_plan="64fef8e6-0460-45b8-ad2d-5a14427f828a",e("https://vue.livelyhelp.chat/livechat.ashx?siteId="),setTimeout(function(){t.loaded||e("https://vue1.livelyhelp.chat/livechat.ashx?siteId=")},5e3)})(OnlineHelpAPI||{})
</script>
<!--End Live Chat Code-->
</body>

</html>
