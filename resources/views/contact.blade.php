@extends('layouts.app')

@section('title')
    World&travel
@endsection

@section('content')
<main>
    <div class="contact-container">
        <div class="contact-info-div">
            <h3>Контакти</h3>
            <p>Якщо у вас виникли запитання, пов'язані з нашими
                турами, спеціальними пакетами чи спеціальними
                пропозиціями, не соромтесь звертатися до нас.
            </p>
            <div class="contact-info-block">
                <ul class="names">
                    <li>Години</li>
                    <li>Skype</li>
                    <li>Контакти</li>
                </ul>
                <ul class="subjects">
                    <li>Понеділок - Субота: 11:00 - 21:00</li>
                    <li>Неділя: 11:00 - 19:00</li>
                    <li class="second">world&travel.skype</li>
                    <li class="third">world&travel@gmail.com</li>
                    <li>380985412855</li>
                </ul>
            </div>
            <a class="btn-social-media" href="#">
                <svg width="272" height="55" viewBox="0 0 272 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.3787 40.9219H30.0105C30.4937 40.9219 30.8855 40.5441 30.8855 40.0781V27.8536H33.8114C34.2599 27.8536 34.6359 27.5265 34.6818 27.0963L35.1751 22.4797C35.2005 22.2422 35.1203 22.0053 34.9543 21.828C34.7883 21.6506 34.5523 21.5495 34.3047 21.5495H30.8855V19.6795C30.8855 19.2933 31.0123 19.2644 31.2058 19.2644H34.2335C34.7167 19.2644 35.1085 18.8866 35.1085 18.4206V13.9382C35.1085 13.4735 34.7189 13.0964 34.237 13.0945L30.0614 13.0781C27.1354 13.0781 25.5738 14.3195 24.7791 15.3608C23.6694 16.8149 23.5037 18.5186 23.5037 19.4048V21.5494H21.7002C21.217 21.5494 20.8252 21.9272 20.8252 22.3931V27.0097C20.8252 27.4757 21.217 27.8535 21.7002 27.8535H23.5037V40.0781C23.5037 40.5441 23.8953 40.9219 24.3787 40.9219ZM22.5751 26.1661V23.237H24.3786C24.8618 23.237 25.2536 22.8592 25.2536 22.3932V19.4049C25.2536 18.858 25.3447 17.4668 26.1884 16.3611C26.9962 15.3025 28.2993 14.7657 30.0576 14.7657L33.3583 14.7786V17.577H31.2055C30.1751 17.577 29.1353 18.2271 29.1353 19.6796V22.3933C29.1353 22.8593 29.5271 23.2371 30.0103 23.2371H33.3347L33.0217 26.1662H30.0103C29.5271 26.1662 29.1353 26.544 29.1353 27.0099V39.2344H25.2535V27.0098C25.2535 26.5438 24.8617 26.1661 24.3785 26.1661H22.5751Z" fill="white"/>
                    <path d="M47.7993 7.90847C42.5108 2.80863 35.4792 0 28 0C20.5214 0 13.4901 2.80863 8.20138 7.90847C2.91266 13.0083 0 19.7885 0 27C0 34.2128 2.91266 40.9934 8.20138 46.0928C13.4898 51.1919 20.521 54 28 54C35.4796 54 42.5111 51.1919 47.7992 46.0928C53.0876 40.9935 56 34.2129 56 27C56 19.7883 53.0876 13.0081 47.7993 7.90847ZM46.5618 44.8995C41.6042 49.6799 35.0121 52.3125 28 52.3125C20.9884 52.3125 14.3966 49.6799 9.43873 44.8995C4.48055 40.1188 1.75 33.7619 1.75 27C1.75 20.2392 4.48055 13.8829 9.43873 9.10174C14.397 4.32053 20.9888 1.6875 28 1.6875C35.0118 1.6875 41.6038 4.32053 46.5618 9.10164C51.5197 13.8826 54.25 20.239 54.25 27C54.25 33.7621 51.5197 40.1189 46.5618 44.8995Z" fill="white"/>
                    <path d="M47.0351 12.1256C46.7306 11.7637 46.1797 11.7083 45.8044 12.002C45.4291 12.2956 45.3717 12.827 45.6762 13.1888C48.9479 17.0774 50.7497 21.9823 50.7497 27C50.7497 32.8606 48.3834 38.3698 44.0867 42.513C39.79 46.6559 34.0769 48.9375 27.9997 48.9375C22.3932 48.9375 17.007 46.9539 12.8335 43.3523C12.4734 43.0416 11.9202 43.0711 11.598 43.4183C11.2758 43.7655 11.3064 44.299 11.6664 44.6097C16.1613 48.4887 21.9619 50.625 27.9997 50.625C34.5444 50.625 40.697 48.1679 45.3241 43.7061C49.9514 39.2443 52.4997 33.3112 52.4997 27C52.4997 21.5964 50.559 16.314 47.0351 12.1256Z" fill="white"/>
                    <path d="M5.25 27C5.25 14.9037 15.4557 5.0625 28 5.0625C33.6066 5.0625 38.9926 7.04616 43.1662 10.648C43.5263 10.9589 44.0795 10.9292 44.4017 10.5821C44.724 10.2349 44.6934 9.70144 44.3333 9.39073C39.8384 5.51137 34.0378 3.375 28 3.375C21.4562 3.375 15.3039 5.83253 10.6762 10.2949C6.04855 14.7572 3.5 20.6899 3.5 27C3.5 32.4042 5.44075 37.6869 8.9647 41.8751C9.13762 42.0807 9.39006 42.1873 9.64469 42.1873C9.83839 42.1873 10.0333 42.1256 10.1955 41.9987C10.5708 41.7051 10.6282 41.1737 10.3237 40.8119C7.05184 36.9233 5.25 32.0182 5.25 27Z" fill="white"/>
                    <path d="M155.945 8.05499C150.752 2.86076 143.845 0 136.5 0C129.155 0 122.249 2.86076 117.055 8.05499C111.861 13.2493 109 20.1547 109 27.5C109 34.8464 111.861 41.7521 117.055 46.9459C122.249 52.1398 129.155 55 136.5 55C143.846 55 150.752 52.1398 155.945 46.9459C161.139 41.7521 164 34.8464 164 27.5C164 20.1547 161.139 13.2488 155.945 8.05499ZM154.73 45.7306C149.861 50.5998 143.387 53.2811 136.5 53.2811C129.614 53.2811 123.139 50.5998 118.27 45.7306C113.401 40.8616 110.719 34.3869 110.719 27.5C110.719 20.6142 113.401 14.14 118.27 9.27033C123.14 4.40065 129.614 1.71888 136.5 1.71888C143.386 1.71888 149.861 4.40065 154.73 9.27033C159.599 14.1395 162.281 20.6136 162.281 27.5C162.281 34.3875 159.599 40.8616 154.73 45.7306Z" fill="white"/>
                    <path d="M155.195 12.3504C154.896 11.9815 154.355 11.925 153.986 12.2244C153.617 12.5234 153.561 13.0647 153.86 13.4329C157.074 17.3935 158.843 22.389 158.843 27.5C158.843 33.469 156.519 39.0803 152.299 43.3001C148.08 47.5198 142.468 49.8434 136.5 49.8434C130.993 49.8434 125.703 47.8234 121.605 44.155C121.25 43.8383 120.708 43.8686 120.391 44.2221C120.075 44.5757 120.104 45.1191 120.458 45.4353C124.873 49.3866 130.57 51.5622 136.5 51.5622C142.927 51.5622 148.97 49.0597 153.515 44.5154C158.059 39.9709 160.562 33.928 160.562 27.5C160.562 21.9961 158.656 16.6162 155.195 12.3504Z" fill="white"/>
                    <path d="M114.156 27.5C114.156 15.1796 124.179 5.15595 136.5 5.15595C142.006 5.15595 147.296 7.17641 151.395 10.845C151.748 11.1617 152.292 11.1313 152.608 10.7778C152.925 10.4243 152.895 9.88088 152.541 9.56452C148.127 5.61343 142.429 3.43774 136.5 3.43774C130.073 3.43774 124.03 5.94066 119.485 10.4857C114.94 15.0305 112.438 21.073 112.438 27.5C112.438 33.0043 114.344 38.3847 117.804 42.6502C117.974 42.8599 118.222 42.9685 118.472 42.9685C118.662 42.9685 118.854 42.9056 119.013 42.776C119.381 42.4771 119.438 41.9358 119.139 41.5675C115.925 37.6069 114.156 32.6108 114.156 27.5Z" fill="white"/>
                    <path d="M143.722 13.713H129.331C125.682 13.713 122.713 16.6819 122.713 20.331V34.7226C122.713 38.3718 125.682 41.3406 129.331 41.3406H143.722C147.372 41.3406 150.34 38.3718 150.34 34.7226V20.331C150.34 16.6819 147.372 13.713 143.722 13.713ZM148.598 34.7225C148.598 37.4107 146.411 39.5979 143.722 39.5979H129.331C126.643 39.5979 124.456 37.4107 124.456 34.7225V20.331C124.456 17.6429 126.643 15.4561 129.331 15.4561H143.722C146.411 15.4561 148.598 17.643 148.598 20.331V34.7225Z" fill="white"/>
                    <path d="M144.248 18.7622C143.663 18.7622 143.187 19.2382 143.187 19.8231C143.187 20.408 143.663 20.8839 144.248 20.8839C144.833 20.8839 145.309 20.408 145.309 19.8231C145.309 19.2382 144.833 18.7622 144.248 18.7622Z" fill="white"/>
                    <path d="M136.526 20.7551C132.792 20.7551 129.755 23.7927 129.755 27.5264C129.755 31.2604 132.792 34.2983 136.526 34.2983C140.26 34.2983 143.298 31.2604 143.298 27.5264C143.298 23.7927 140.26 20.7551 136.526 20.7551ZM136.526 32.5559C133.753 32.5559 131.497 30.2997 131.497 27.5264C131.497 24.7539 133.753 22.4983 136.526 22.4983C139.299 22.4983 141.555 24.7539 141.555 27.5264C141.555 30.2997 139.299 32.5559 136.526 32.5559Z" fill="white"/>
                    <path d="M263.946 8.05492C258.752 2.86064 251.846 0 244.5 0C237.155 0 230.249 2.86064 225.055 8.05492C219.861 13.2492 217 20.1549 217 27.5C217 34.8464 219.861 41.7525 225.055 46.9464C230.249 52.1399 237.155 55 244.5 55C251.846 55 258.752 52.1399 263.946 46.9464C269.14 41.7526 272 34.8465 272 27.5C272 20.1548 269.14 13.249 263.946 8.05492ZM262.73 45.731C257.861 50.5999 251.387 53.2812 244.5 53.2812C237.614 53.2812 231.14 50.5999 226.27 45.731C221.401 40.8618 218.719 34.3871 218.719 27.5C218.719 20.614 221.401 14.1399 226.27 9.27019C231.14 4.40054 237.614 1.71875 244.5 1.71875C251.387 1.71875 257.861 4.40054 262.73 9.27019C267.6 14.1397 270.281 20.6138 270.281 27.5C270.281 34.3874 267.6 40.8619 262.73 45.731Z" fill="white"/>
                    <path d="M263.195 12.3502C262.896 11.9815 262.355 11.9251 261.986 12.2243C261.618 12.5234 261.561 13.0645 261.861 13.433C265.074 17.3936 266.843 22.3895 266.843 27.5C266.843 33.4691 264.519 39.0804 260.299 43.3001C256.079 47.5199 250.468 49.8438 244.5 49.8438C238.993 49.8438 233.703 47.8235 229.604 44.1551C229.251 43.8387 228.707 43.8687 228.391 44.2224C228.074 44.576 228.104 45.1193 228.458 45.4358C232.873 49.3867 238.57 51.5625 244.5 51.5625C250.928 51.5625 256.97 49.0599 261.515 44.5155C266.059 39.9711 268.562 33.9281 268.562 27.5C268.562 21.9965 266.656 16.6161 263.195 12.3502Z" fill="white"/>
                    <path d="M222.156 27.5C222.156 15.1797 232.18 5.15625 244.5 5.15625C250.006 5.15625 255.296 7.17664 259.395 10.8452C259.749 11.1619 260.292 11.1316 260.609 10.7781C260.925 10.4244 260.895 9.88109 260.542 9.56463C256.127 5.61344 250.43 3.4375 244.5 3.4375C238.073 3.4375 232.03 5.94054 227.486 10.4856C222.941 15.0306 220.438 21.0731 220.438 27.5C220.438 33.0042 222.344 38.3848 225.805 42.6506C225.974 42.8599 226.222 42.9685 226.472 42.9685C226.663 42.9685 226.854 42.9057 227.013 42.7765C227.382 42.4774 227.438 41.9362 227.139 41.5676C223.926 37.6071 222.156 32.6111 222.156 27.5Z" fill="white"/>
                    <path d="M259.304 21.3995C259.272 21.1592 258.964 19.023 257.963 17.9358C256.768 16.6055 255.408 16.4678 254.754 16.4015C254.697 16.3957 254.644 16.3904 254.597 16.3847C254.584 16.3831 254.571 16.3818 254.558 16.3809C250.61 16.0748 244.65 16.0713 244.591 16.0713H244.577C244.517 16.0713 238.557 16.0748 234.61 16.3809C234.597 16.3818 234.584 16.3831 234.572 16.3847C234.525 16.3905 234.472 16.3958 234.415 16.4015C233.761 16.4677 232.402 16.6053 231.206 17.9357C230.206 19.0225 229.897 21.1588 229.865 21.3992C229.864 21.4039 229.864 21.4088 229.863 21.4135C229.851 21.5152 229.574 23.9338 229.574 26.3978V28.6873C229.574 31.153 229.851 33.5707 229.863 33.6725C229.864 33.6771 229.864 33.6818 229.865 33.6865C229.897 33.9268 230.205 36.0625 231.206 37.1481C232.313 38.3784 233.714 38.5584 234.468 38.6553C234.601 38.6724 234.715 38.6871 234.793 38.7027C234.82 38.708 234.847 38.7121 234.874 38.7148C237.151 38.9481 244.274 39.0198 244.586 39.0228C244.646 39.0227 250.611 39.0086 254.558 38.7063C254.572 38.7052 254.587 38.7037 254.601 38.7017C254.65 38.6955 254.704 38.69 254.763 38.6838C255.415 38.6156 256.772 38.4738 257.963 37.1485C258.963 36.0631 259.272 33.9281 259.304 33.6878C259.304 33.6831 259.305 33.6783 259.305 33.6734C259.317 33.5717 259.594 31.1532 259.594 28.6884V26.3987C259.594 23.9339 259.317 21.5154 259.305 21.4136C259.305 21.4089 259.304 21.4042 259.304 21.3995ZM257.875 28.6884C257.875 30.9871 257.616 33.3222 257.599 33.4686C257.534 33.9461 257.234 35.4057 256.697 35.9861C256.694 35.9896 256.69 35.9931 256.687 35.9966C255.938 36.833 255.123 36.9181 254.584 36.9745C254.52 36.9813 254.46 36.9876 254.406 36.9943C250.523 37.2901 244.642 37.3041 244.593 37.3043C244.52 37.3035 237.327 37.2312 235.085 37.0089C234.961 36.9861 234.828 36.9689 234.687 36.9508C234.043 36.8681 233.162 36.7547 232.481 35.9955C232.478 35.9919 232.474 35.9884 232.471 35.9848C231.993 35.4695 231.665 34.1699 231.569 33.4673C231.552 33.3174 231.293 30.9852 231.293 28.6874V26.3979C231.293 24.099 231.553 21.7631 231.569 21.6183C231.634 21.1404 231.934 19.6796 232.472 19.0978C232.475 19.0946 232.478 19.0913 232.481 19.0881C233.233 18.2487 234.049 18.1662 234.588 18.1116C234.65 18.1052 234.708 18.0993 234.761 18.0931C238.642 17.7936 244.518 17.79 244.577 17.79H244.59C244.649 17.79 250.526 17.7936 254.407 18.0931C254.46 18.0993 254.518 18.1052 254.58 18.1116C255.12 18.1661 255.935 18.2487 256.687 19.0878C256.69 19.0912 256.693 19.0946 256.696 19.098C257.174 19.6145 257.503 20.9145 257.599 21.6188C257.616 21.7684 257.875 24.1016 257.875 26.3986L257.875 28.6884Z" fill="white"/>
                    <path d="M250.339 26.8102L241.492 21.502C241.227 21.3428 240.896 21.3386 240.626 21.491C240.357 21.6436 240.19 21.9292 240.19 22.2388V32.8552C240.19 33.1648 240.357 33.4505 240.626 33.603C240.758 33.6774 240.904 33.7146 241.05 33.7146C241.203 33.7146 241.356 33.6736 241.492 33.5921L250.339 28.2839C250.598 28.1285 250.756 27.8488 250.756 27.5469C250.756 27.2451 250.598 26.9655 250.339 26.8102ZM241.909 31.3375V23.7568L248.227 27.5472L241.909 31.3375Z" fill="white"/>
                </svg>
            </a>
        </div>
        <div class="login-div contact">
            <form>
                <div class="row-4">
                    <div class="col-25">
                        <input type="text" id="fname" name="firstname" placeholder="Ім’я*">
                    </div>
                </div>
                <div class="row-4">
                    <div class="col-25">
                        <input type="text" id="email" name="email" placeholder="Email*">
                    </div>
                </div>
                <div class="row-4">
                    <div class="col-25">
                        <textarea id="subject" name="subject" placeholder="Ваше звернення" style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row-4">
                    <a class="btn btn-send" href="#">Відправити</a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
