<!DOCTYPE HTML>
<html>
    <body>
        <div id="navBar">
            <ul>
							<div style="margin-top: 6px;">
                <li class="welcomeLi"><h3>GregsList</h3></li>
							</div>
            <div id="liContainerNav">
                <?php
								if(!$loggedIn) {
									echo '<a href="/login/"><li>Log In</li></a>';
									echo '<a href="/signup/"><li>Create An Account</li></a>';
								}
								?>
								<div style="margin-top: 27px;">
                	<a href="#contact"><li>Contact Us</li></a>
								</div>
            </div>
            <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Search Categories</button>
              <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="#automotive">Automotive</a>
                <a href="#sportingGoods">Sporting Goods</a>
                <a href="#jobs">Jobs</a>
                <a href="#computers">Computers</a>
                <a href="#hunting">Hunting</a>
                <a href="#childCare">Child Care</a>
                <a href="#tools">Tools</a>
              </div>
            </div>
            </ul>
        </div>