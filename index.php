<?php
// brands.php

$brands = [
    "Apple" => ["iPhone 6S", "iPhone 7", "iPhone 8", "iPhone X", "iPhone XR", "iPhone 11", "iPhone 12", "iPhone 13", "iPhone 14", "iPhone 15", "iPhone 16", "iPhone 17", "Other"],
    "Samsung" => ["Galaxy S20", "Galaxy S21", "Galaxy S22", "Galaxy S23", "Galaxy S24", "Note 10", "Note 20", "Note 21", "Galaxy Z Fold 4", "Galaxy Z Fold 5", "Galaxy Z Flip 4", "Galaxy Z Flip 5", "Other"],
    "OnePlus" => ["OnePlus 8", "OnePlus 9", "OnePlus 10", "OnePlus 11", "OnePlus 12", "Other"],
    "Google" => ["Pixel 4", "Pixel 5", "Pixel 6", "Pixel 7", "Pixel 8", "Pixel 9", "Other"],
    "Xiaomi" => ["Redmi Note 9", "Redmi Note 10", "Redmi Note 11", "Redmi Note 12", "Mi 10", "Mi 11", "Mi 12", "Mi 13", "Mi 14", "Mi 15", "Other"],
    "Huawei" => ["P30", "P40", "P50", "P60", "Mate 30", "Mate 40", "Mate 50", "Mate 60", "Other"],
    "Vivo" => ["Vivo V21", "Vivo V23", "Vivo V25", "Vivo V29", "Vivo X70", "Vivo X80", "Vivo X90", "Vivo X100", "Other"],
    "Oppo" => ["Oppo F19", "Oppo Reno 7", "Oppo Reno 8", "Oppo Reno 9", "Oppo Reno 10", "Oppo Find X3", "Oppo Find X5", "Oppo Find X6", "Other"],
    "Realme" => ["Realme 7", "Realme 8", "Realme 9", "Realme 10", "Realme 11", "Realme GT 2", "Realme GT 3", "Realme GT 4", "Other"],
    "LG" => ["LG G7", "LG G8", "LG V50", "LG V60", "LG Velvet", "LG Wing", "Other"],
    "Asus" => ["Asus Zenfone 7", "Asus Zenfone 8", "Asus ROG Phone 5", "Asus ROG Phone 6", "Asus ROG Phone 7", "Asus ROG Phone 8", "Other"],
    "Sony" => ["Xperia 1 III", "Xperia 1 IV", "Xperia 1 V", "Xperia 5 III", "Xperia 10 III", "Xperia 10 IV", "Other"],
    "Honor" => ["Honor 50", "Honor 60", "Honor 70", "Honor 80", "Honor Magic4", "Honor Magic5", "Honor Magic6", "Other"],
    "Lenovo" => ["Lenovo K12", "Lenovo Z6", "Lenovo Legion Duel", "Lenovo Legion 3", "Lenovo Legion 4", "Other"],
    "Tecno" => ["Tecno Spark 8", "Tecno Spark 9", "Tecno Camon 18", "Tecno Camon 19", "Tecno Camon 20", "Tecno Camon 21", "Other"],
    "Infinix" => ["Infinix Note 10", "Infinix Note 11", "Infinix Note 12", "Infinix Zero 5", "Infinix Zero 6", "Infinix Zero 7", "Other"],
    "Micromax" => ["Micromax In Note 1", "Micromax Bharat 2", "Micromax In Note 2", "Other"],
    "Other" => ["Other Models"]
];

$services = [
    "iPhone & iPad Screen Replacement",
    "Battery Replacement",
    "Back Glass Repair",
    "Broken Screen Repair",
    "Mobile Display Repair",
    "Camera & Speaker Repair",
    "Software & Network Issue Repair",
    "Other"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile iPhone & iPad Screen Replacement – Screen & Display Repair | ScreenGo Delhi NCR</title>
    <link rel="icon" type="image/png" href="mobile-service/assets/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17927795595"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-17927795595');
    </script>
    <style>
        body {
            background: #f7f8fc;
        }

        .hero {
            padding: 100px 0;
            background: linear-gradient(to right, #6a11cb, #030f22);
            color: white;
        }

        .service-card {
            border-radius: 12px;
            transition: 0.4s;
            background: white;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 15px 28px rgba(0, 0, 0, 0.15);
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            z-index: 1000;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff512f, #dd2476);
            border: none;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #dd2476, #ff512f);
        }
    </style>
</head>

<body>
    <a href="https://wa.me/+918802339105" target="_blank" class="whatsapp-float" onclick="trackWhatsappConversion()">
        <i class="bi bi-whatsapp"></i>
    </a>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">ScreenGo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Book Repair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Mobile iPhone & iPad Screen Replacement in Delhi NCR</h1>
                    <h2 class="mt-3">Broken screen, back glass repair & mobile display repair for iPhone, iPad, OnePlus
                        & Redmi</h2>
                    <p>ScreenGo provides fast, affordable, and professional <strong>mobile screen replacement</strong>
                        services for <strong>iPhone</strong>, <strong>iPad</strong>, <strong>OnePlus</strong>,
                        <strong>Redmi</strong>, and other devices. Whether you need a <strong>broken screen
                            replacement</strong>, <strong>back glass repair</strong>, or general <strong>mobile display
                            repair</strong>, our certified technicians will fix your device safely at home or office.
                    </p>
                    <ul class="mt-3">
                        <li>✔ Certified & Experienced Technicians</li>
                        <li>✔ Affordable Pricing & Original Parts</li>
                        <li>✔ Same-Day Screen & Battery Replacement</li>
                        <li>✔ Warranty on All Repairs</li>
                    </ul>
                </div>

                <div class="col-lg-6" id="contact">
                    <div class="card p-4 shadow">
                        <h4>Book Your Repair & Call <a href="tel:+918802339105">+91 88023 39105</a></h4>
                        <form id="repairForm">
                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label>Phone Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Your Number" required>
                            </div>
                            <div class="mb-3">
                                <label>Brand</label>
                                <select name="brand" class="form-select" id="brandSelect" required>
                                    <option value="">Select Brand</option>
                                    <?php foreach ($brands as $brand => $models): ?>
                                        <option value="<?= htmlspecialchars($brand) ?>"><?= htmlspecialchars($brand) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Model</label>
                                <select name="model" class="form-select" id="modelSelect" required>
                                    <option value="">Select Model</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Issue</label>
                                <select name="issue" class="form-select" required>
                                    <?php foreach ($services as $service): ?>
                                        <option value="<?= htmlspecialchars($service) ?>"><?= htmlspecialchars($service) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" id="submitBtn">
                                <span id="btnText">Submit Request</span>
                                <span class="spinner-border spinner-border-sm d-none" role="status"
                                    id="btnSpinner"></span>
                            </button>
                            <div id="responseMsg" class="mt-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light" id="services">
        <div class="container">
            <h2 class="text-center mb-5">Our Top Mobile Repair Services in Delhi NCR</h2>
            <div class="row g-4">
                <?php
                $serviceItems = [
                    ["icon" => "phone-fill", "title" => "Mobile Screen Replacement", "desc" => "Fast, same-day screen repair for iPhone, Samsung, OnePlus, Xiaomi, and more. Original screens & guaranteed service."],
                    ["icon" => "battery-full", "title" => "Battery Replacement Services", "desc" => "High-quality original batteries for iPhone, Samsung, OnePlus, and other smartphones. Long-lasting power for your device."],
                    ["icon" => "tools", "title" => "Professional Phone Technicians", "desc" => "Certified mobile repair experts handling screen, battery, software, and hardware repairs with precision and care."],
                    ["icon" => "house-fill", "title" => "Doorstep Device Services", "desc" => "Convenient home or office mobile repair services in Delhi, Gurugram, and Noida. Save time with on-demand technicians."],
                    ["icon" => "clock-fill", "title" => "Same-Day Screen Replacement", "desc" => "Quick and reliable mobile screen repair services. Get your iPhone, Samsung, or OnePlus device fixed the same day."],
                    ["icon" => "cash-stack", "title" => "Affordable Device Repairs", "desc" => "High-quality mobile repairs at competitive prices. Screen replacement, battery fixes, and other smartphone services."],
                    ["icon" => "droplet-fill", "title" => "Water Damage Repairs", "desc" => "Professional water damage repair services for smartphones. Save your iPhone, Samsung, or other devices from liquid damage."],
                    ["icon" => "laptop-fill", "title" => "Software & Network Issues", "desc" => "Fix software glitches, WiFi, Bluetooth, and network problems on iPhone, Samsung, OnePlus, and other smartphones."],
                    ["icon" => "camera-fill", "title" => "Camera & Speaker Repairs", "desc" => "Repair front and back cameras, speakers, and microphones for all major smartphone brands. Original parts guaranteed."]
                ];
                foreach ($serviceItems as $item): ?>
                    <div class="col-md-4">
                        <div class="card text-center p-4 service-card h-100">
                            <i class="bi bi-<?= $item['icon'] ?> text-primary" style="font-size:40px;"></i>
                            <h5 class="mt-3"><?= $item['title'] ?></h5>
                            <p><?= $item['desc'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container text-center">
            <p>© 2025 ScreenGo. All Rights Reserved.</p>
            <p>Delhi, Gurugram, Noida | <a href="tel:+918802339105" class="text-white">+91 88023 39105</a> |
                <a href="mailto:service@screengo.in" class="text-white">service@screengo.in</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Tag -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16807218585"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-16807218585');
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const brands = <?= json_encode($brands) ?>;
            const brandSelect = document.getElementById('brandSelect');
            const modelSelect = document.getElementById('modelSelect');

            brandSelect.addEventListener('change', () => {
                modelSelect.innerHTML = '<option value="">Select Model</option>';
                (brands[brandSelect.value] || []).forEach(model => {
                    let option = document.createElement('option');
                    option.value = model;
                    option.textContent = model;
                    modelSelect.appendChild(option);
                });
            });

            document.getElementById('repairForm').addEventListener('submit', function (e) {
                e.preventDefault();
                const btn = document.getElementById('submitBtn');
                const spinner = document.getElementById('btnSpinner');
                const text = document.getElementById('btnText');

                btn.disabled = true;
                spinner.classList.remove('d-none');
                text.textContent = 'Submitting...';

                fetch('submit_repair.php', {
                    method: 'POST',
                    body: new FormData(this)
                })
                    .then(r => r.ok ? r.text() : Promise.reject())
                    .then(() => {
                        document.getElementById('responseMsg').innerHTML =
                            '<div class="alert alert-success">Request Submitted</div>';
                        gtag('event', 'conversion', {
                            send_to: 'AW-17771847457/nqyZCInFrdUbEKG-o5pC'
                        });
                        this.reset();
                        modelSelect.innerHTML = '<option value="">Select Model</option>';
                    })
                    .catch(() => {
                        document.getElementById('responseMsg').innerHTML =
                            '<div class="alert alert-danger">Error. Try again.</div>';
                    })
                    .finally(() => {
                        btn.disabled = false;
                        spinner.classList.add('d-none');
                        text.textContent = 'Submit Request';
                    });
            });
        });

        function trackWhatsappConversion() {
            gtag('event', 'conversion', {
                send_to: 'AW-17771847457/ln2TCIjG2NUbEKG-o5pC'
            });
        }
    </script>
</body>

</html>