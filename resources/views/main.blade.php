<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>Smilez</span></h2>
        </div>

        <div class="sidebar-menu"
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                    <span>Income</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                    <span>Reciepts</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-receipt"></span>
                    <span>Expenses</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                    <span>Accounts</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                    <span>Tasks</span></a>
                </li>
            </ul>
    </div>
 </div>

 <div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>

            Dashboard
        </h2>

        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search here" />
        </div>

        <div class="user-wrapper">
            <img src="buna.avif" width="30px" height="30px" alt="">
            <div>
                <h4>Ajor Virtuous</h4>
                <small>Super admin</small>
            </div>
        </div>
    </header>

    <main>

    <div class="cards">
        <div class="card-single">
            <div>
                <h1>104</h1>
                <span>Transactions</span>
            </div>
            <div>
                <span class="las la-users"></span>
            </div>
            </div>

            <div class="card-single">
            <div>
                <h1>$4k</h1>
                <span>Income</span>
            </div>
            <div>
                <span class="las la-clipboard-list"></span>
            </div>
            </div>

            <div class="card-single">
            <div>
                <h1>$2.3k</h1>
                <span>Expenses</span>
            </div>
            <div>
                <span class="las la-shopping-bag"></span>
            </div>
            </div>

            <div class="card-single">
            <div>
                <h1>$6k</h1>
                <span>Assets</span>
            </div>
            <div>
                <span class="lab la-google-wallet"></span>
            </div>
            </div>
    </div>

    <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h2>Summary</h2>

                    <button>See all <span class="las la-arrow-right">

                    </span></button>
                </div>

                <div class="card-body">
                    <style>
                        .content-table {
                            border-collapse: collapse;
                            margin:25px 0;
                            font-size: 0.9rem;
                            min-width: 500px;
                            width: 100%;
                        }

                        .content-table thead tr{
                            background-color: rgba(63, 114, 76, 0.7);
                            color: #fff;
                            text-align: left;
                            font-weight:bold;
                        }

                        .content-table th,
                        .content-table td {
                            padding: 12px 15px;
                        }

                        .content-table tbody tr{
                            border-bottom: 1px solid #fddddd;
                        }

                        .content-table tbody tr:nth-of-type(even) {
                            background-color: #f3f3f3;
                        }

                        .content-table tbody tr:last-of-type {
                            border-bottom: 2px solid rgba(63, 114, 76, 0.7);
                        }
                    </style>
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Income</th>
                                <th>Expenses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$44</td>
                                <td>$65</td>
                            </tr>
                            <tr>
                                <td>$32</td>
                                <td>$80</td>
                            </tr>
                            <tr>
                                <td>$79</td>
                                <td>$54</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="customers">
            <div class="card">
                <div class="card-header">
                    <h3>New Customers</h3>

                    <button>See all <span class="las la-arrow-right">

                    </span></button>
                </div>

                <div class="card-body">
                    <div class="customer">
                        <img src="l.avif" width="40px" height="40px" alt="">
                        <div>
                            <h4>Ajor Vincent</h4>
                            <small> CEO V.J Couture</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="customer">
                        <img src="l.avif" width="40px" height="40px" alt="">
                        <div>
                            <h4>Virtuous Ajor</h4>
                            <small> CEO GNF Collections</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

            <!-- </div> -->
        </div>
    </div>
    </main>
 </div>
</body>
</html>
