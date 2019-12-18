<footer id="footer-section" class="container d-md-flex d-flex-md-column ml-0 mr-0 pl-0 pr-0 mb-5 col-12 ">
            <!-- Left Column -->
            <div id="footer-left"
                class="container col-12 col-md-6 bg-light d-flex-column text-secondary align-self-md-stretch mb-3 mb-md-0">
                <h2 class="col-12 text-center text-uppercase">Contact</h2>

                <form action="/action_page.php" method="POST" target="_self" name="contact-form" id="contact-form"
                    width="100%" onsubmit="validateFormFx(event)">
                    <fieldset>
                        <legend>Hire Me!</legend>

                        <input type="text" name="first-name" id="first-name" placeholder="Your First Name..."
                            class="req" />
                        <label for="first-name">*</label>
                        <br /><br />
                        <input type="text" name="last-name" id="last-name" placeholder="Your Last Name..."
                            class="req" />
                        <label for="last-name">*</label>
                        <br /><br />
                        <input type="email" name="email" id="email" placeholder="Your Email..." class="req" />
                        <label for="email">*</label>
                        <br /><br />
                        <input type="tel" name="phone" id="phone" placeholder="000-000-0000"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="req" />
                        <label for="phone">*</label>
                        <br /><br />
                        <input type="text" name="subject" id="subject" placeholder="Subject..." class="req" />
                        <label for="subject">*</label>
                        <br /><br />

                        <textarea name="message" id="message" rows="5" class="req"
                            placeholder="Write me a message.."></textarea>
                        <label for="message" style="display:inline-block;vertical-align: top;">*</label>



                        <fieldset>
                            <legend>I Prefer To Communicate Via:</legend>
                            <select name="com" id="com">
                                <option value="phone-call">Phone Calls</option>
                                <option value="text-mes">Text Messages</option>
                                <option value="emails" Emails>Emails</option>
                                <option value="Skype">Skype</option>
                                <option value="WatsApp">WhatsApp</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Hangouts">Hangouts</option>
                                <option value="person" selected>In Person</option>
                            </select>
                        </fieldset>
                        <input type="radio" name="news" id="news" />
                        <span>Please send me the newsletter by email.</span>
                        <input type="submit" name="submit" id="submit" value="Submit!" />
                    </fieldset>
                </form>
            </div>
            <!-- Right Column-->
            <div id="footer-right"
                class="container col-12 col-md-6 bg-secondary d-flex-column text-light align-self-md-stretch">
                <div id="credentials">
                    <h2 class="col-12 text-center text-uppercase">My tools</h2>
                    <ul id="footer-tools" class="container list-unstyled d-flex flex-wrap">
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">PHP</p>
                                <figure class="col-12"><img src="../../images/php-icon.png" alt="php"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">JavaScript</p>
                                <figure class="col-12"><img src="../../images/js-icon.png" alt="javascript"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">MySQL</p>
                                <figure class="col-12"><img src="../../images/mysql-icon.png" alt="mySql"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">BootStrap</p>
                                <figure class="col-12"><img src="../../images/bootstrap-icon.png" alt="BootStrap"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">VS Code</p>
                                <figure class="col-12">
                                    <img src="../../images/vcode-icon.png" alt="Visual Studio Code"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">GitHub</p>
                                <figure class="col-12"><img src="../../images/git_hub-icon.png" alt="GitHub"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">AffinityPhoto</p>
                                <figure class="col-12">
                                    <img src="../../images/affinity_photo-icon.png" alt="AffinityPhoto"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                                </p>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">AffinityDesigner</p>
                                <figure class="col-12">
                                    <img src="../../images/affinity_designer-icon.png" alt="AffinityDesigner"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="copyright" class="text-dark text-center text-md-right">Copyright © <span id="year"></span>
                    Tomas Petr</div>
            </div>
        </footer>