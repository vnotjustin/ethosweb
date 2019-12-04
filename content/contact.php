<div class="navpad">


        <div class="stack" onClick="style.pointerEvents='none'">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.293736620525!2d-119.76530908423481!3d36.811480579946235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80945d0d780f0d87%3A0x32042f9d800946f4!2s5150+N+6th+St+%23130%2C+Fresno%2C+CA+93710!5e0!3m2!1sen!2sus!4v1493674176343" height="510" class="boxbord" allowfullscreen></iframe>
    </div>
 
 <?php 

        if (isset($_POST['Email'])){
            submitContact($_POST['Email'], $_POST['Name'], $_POST['Subject'], $_POST['Message']);
        }

?>
 
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="?page=contact" method="post">
                <div class="row">
                    <div class="col-md-6">
        
                        <div class="form-group">
                            <label for="Email" class="font">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input name="Email" type="email" class="form-control" id="Email" placeholder="Enter email" required="required" /></div>
                        </div>
                        
                         <div class="form-group">
                            <label for="Fname" class="font">
                                Name</label>
                            <input name="Name" type="text" class="form-control" placeholder="Enter name" required="required" />
                        </div>
                        
                        <div class="form-group">
                            <label for="Subject" class="font">
                                Subject</label>
                            <select name="Subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="customer service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Message" class="font">
                                Message</label>
                            <textarea name="Message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right font" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend class="font"><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address class="font">
                <strong>ETHOS Protection Services Inc.</strong><br>
                5150 N. Sixth St. #130 <br>
                Fresno, CA 93710<br>
                Phone: (559) 825-1791<br><br>
                Hours:
                Monday - Friday <br>
                9:00am - 4:00pm
            </address>
            <address>
                <strong class="font">Sam Carter:</strong>&ensp; Main Office & Training<br>
                <a href="mailto:#" class="font">sam@ethosprotectionservices.com</a><br>
                <strong class="font">Jim McGuire:</strong>&ensp; Consulting & Assessments<br>
                <a href="mailto:#" class="font">Jim@ethosprotectionservices.com</a>
            </address>
            </form>
        </div>
    </div>
</div>  