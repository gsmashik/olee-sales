<!-- For Flash Meaasge -->
<div id="message">





      <div style="padding: 5px;">
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block sticky-top alert alert-dismissible ">
              <button type="button" class="close" data-dismiss="alert">×</button> 
                  <strong>{{ $message }}</strong>
          </div>
          @endif
           
           
          @if ($message = Session::get('error'))
          <div class="alert alert-danger alert-block sticky-top alert alert-dismissible">
              
              
              <button type="button" class="close" data-dismiss="alert">×</button> 
                  <strong>{{ $message }}</strong>
          </div>
          @endif
           
           
          @if ($message = Session::get('warning'))
          <div class="alert alert-warning alert-block sticky-top alert alert-dismissible">
              
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>

          </div>
          @endif
           
           
          @if ($message = Session::get('info'))
          <div class="alert alert-info alert-block sticky-top alert alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
          </div>
          @endif
           
           
          @if ($errors->any())
          <div class="alert bg-danger sticky-top alert alert-dismissible">
            <i  class=" btn-danger" data-toggle="collapse" data-target="#demo">See Error Details  </i>

            <div id="demo" class="collapse">
<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
 <button type="button" class="close" data-dismiss="alert">×</button> 
              Please check the form below for errors 
              
          </div>
          @endif
      </div>
  </div>
 
 
<!-- For Flash Meaasge End -->