<?php include("header.php"); ?>

<link rel="stylesheet" href="style.css">
<div class="main">
            <div class="contactform">
                <h1>Contact Us</h1>
                <form>
                    <div class="mb-3">
                        <label for="clientemail" class="form-label">Name</label>
                        <input type="name" class="form-control" id="clientname" aria-describedby="name">
                        <div id="emailHelp" class="form-text"></div>
                      </div>
                    <div class="mb-3">
                      <label for="clientemail" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="clientemail" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your data with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="clientphone" class="form-label">Phone</label>
                      <input type="phone" class="form-control" id="clientphone">
                    </div>
                    <div class="mb-3">
                        <label for="clientemail" class="form-label">Enquiry</label>
                        <input type="name" class="form-control" id="clientname" aria-describedby="name">
                        <div id="emailHelp" class="form-text"></div>
                      </div>
                    <div class="mb-3" id="form-check">
                      <input type="checkbox" class="form-check-input" id="clientwork">
                      <label class="form-check-label" for="clientwork">Confirm Submission</label>
                    </div>
                    <button type="submit" class="btn btn-sm">Submit</button>
                  </form>
                </div>
        </div>