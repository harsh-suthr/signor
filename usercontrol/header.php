<!DOCTYPE html>
<html>
<head runat="server">
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link href="css/lightbox.min.css" rel="stylesheet">
    <asp:ContentPlaceHolder ID="head" runat="server">
    </asp:ContentPlaceHolder>
</head>
<body>
<div class="popup_div">
    <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <h2>Quick Inquiry</h2>
                        <form action="mail.php" onsubmit="return validateForm()" method="POST" role="form"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Full Name*"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email ID*"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone"
                                    placeholder="Phone No." pattern="[0-9]{10}" required />
                            </div>
                            <div class="form-group">
                                <select name="sitevisit" class="form-control" required>
                                    <option selected disabled>Interested in site visit?</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <input type="submit" class="submit-btn" name="bannerbutton" id="bannerbutton"
                                value="Enquire Now" />
                        </form>

                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body proj_detail">
                        <h2>Project Details</h2>
                        <ul>
                            <li><strong>Name:</strong><span>Eminence 96</span></li>
                            <li><strong>ADDRESS :</strong><span>Besides Aryaman Bung., Thaltej- road,
                                        Ahmedabad</span></li>
                            <li><strong>TYPE :</strong><span>4 BHK, 5 BHK</span></li>
                            <li><strong>TOTAL UNITS :</strong><span>4 bhk - 88 Units, 5 BHK DUPLEX - 8 Units</span>
                            </li>
                            <li><strong>TOWER :</strong><span>4</span></li>
                            <li><strong>POSSESSION :</strong><span>2024</span></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<header>
    <div class="header-section" id="main_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand py-1 logo">
                            <img src="images/logo.png" alt="Logo" title="Logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#home">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#specification">SPECIFICATIONS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#security">SECURITY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#amenities">AMENITIES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#area-floor">AREA & FLOOR</a>
                                </li>
                                <li>
                                    <a class="header-btn" data-toggle="modal" data-target="#myModal">Enquiry Now</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="clear-fix "></div>