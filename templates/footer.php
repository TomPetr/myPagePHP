

<footer id="footer-section" class="clearfix">
        <!-- Left Column -->
        <div id="footer-left">
            <h2>Contact</h2>
            <form action="/action_page.php" method="POST" target="_self" name="contact-form" id="contact-form"
                width="100%" onsubmit="validateFormFx(event)">
                <fieldset>
                    <legend>Hire Me!</legend>

                    <input type="text" name="first-name" id="first-name" placeholder="Your First Name..." class="req" />
                    <label for="first-name">*</label>
                    <br /><br />
                    <input type="text" name="last-name" id="last-name" placeholder="Your Last Name..." class="req" />
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
                    <label for="message">*</label>



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
        <div id="footer-right">
            <div id="credentials">
                <h2>My tools</h2>
                <ul id="footer-tools">
                    <?php include('../data/tools.php'); ?>
                    <?php
                      function myToolls($myTools) {
                        foreach($myTools as $tool => $item) { ?>
                           <li>
                              <p><?php echo $tool; ?></p>
                              <p><img src="../images/<?php echo $item['slug']; ?>"  alt="<?php echo $tool; ?>" /></p>
                           </li>
                     <?php
                         }
                       }
                     ?>
             <?php myToolls($myTools); ?>
                </ul>
            </div>
            <div id="copyright">Copyright © <span id="year"></span> Tomas Petr</div>
            <!-- </div> -->
    </footer>