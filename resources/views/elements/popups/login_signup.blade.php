<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-body">
                     <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                           <li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
                           <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
                        </ul>
                        <div class="tab-content" id="myModalLabel2">
                           <div role="tabpanel" class="tab-pane fade in active" id="login">
                              <img src="img/logo.png" class="img-responsive" alt=""/> 
                              <div class="subscribe wow fadeInUp">
                                 <form class="form-inline" method="post">
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input type="email" name="email" class="form-control" placeholder="Username" required=""> <input type="password" name="password" class="form-control" placeholder="Password" required=""> 
                                          <div class="center"> <button type="submit" id="login-btn" class="submit-btn"> Login </button> </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                           <div role="tabpanel" class="tab-pane fade" id="register">
                              <img src="img/logo.png" class="img-responsive" alt=""/> 
                              <form class="form-inline" method="post">
                                 <div class="col-sm-12">
                                    <div class="form-group">
                                       <input type="text" name="email" class="form-control" placeholder="Your Name" required=""> <input type="email" name="email" class="form-control" placeholder="Your Email" required=""> <input type="email" name="email" class="form-control" placeholder="Username" required=""> <input type="password" name="password" class="form-control" placeholder="Password" required=""> 
                                       <div class="center"> <button type="submit" id="subscribe" class="submit-btn"> Create Account </button> </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button> 
         <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
            <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button> 
            <ul id="styleOptions" title="switch styling">
               <li> <a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a> </li>
               <li> <a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a> </li>
               <li> <a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a> </li>
               <li> <a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a> </li>
               <li> <a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a> </li>
               <li> <a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a> </li>
               <li> <a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a> </li>
               <li> <a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a> </li>
            </ul>
         </div>