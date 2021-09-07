<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tech Projects ~ Admin Panel</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body id="style-scroll">
    <?php
        if($_SESSION["uname"]) {
    ?>

    <div class="container-fluid d-flex justify-content-center mt-4">
        <a id="button" class="btn text-white" href="logout.php">Logout</a>
    </div>

    <section class="mt-4">
        <div class="container"  style="overflow-x:auto;">
            <!-- table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Join Us</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../config.php';
                        $sql = "SELECT * FROM contact";
                        $result = mysqli_query($con, $sql);
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['joinus']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mt-4">
        <div class="container">
            <div class="row text-center">
                <h2 class="fw-bold mb-3">App Projects</h2>
                <div class="heading-line mb-5"></div>
            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-6 col-md-12 bg-white p-3">
          <div class="form w-100 pb-2">
            <form method="POST" action="app.php" class="row" enctype="multipart/form-data">
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input name="pname" type="text" placeholder="Project Name" class="form-control form-control-lg">
              </div>
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <textarea name="pdesc" placeholder="Project Description" id="message" rows="8" class="form-control form-control-lg"></textarea>
              </div>
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input type="file" name="images[]" multiple class="form-control form-control-lg">
              </div>
              <div class="col-lg-12 col-md-12 mb-3 d-grid text-center">
                <button type="submit" name="submit" id="button" class="rounded-pill pt-3 pb-3">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-4">
        <div class="container">
            <div class="row text-center">
                <h2 class="fw-bold mb-3">Web Projects</h2>
                <div class="heading-line mb-5"></div>
            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-6 col-md-12 bg-white p-3">
          <div class="form w-100 pb-2">
            <form method="POST" action="web.php" class="row" enctype="multipart/form-data">
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input name="pname" type="text" placeholder="Project Name" class="form-control form-control-lg">
              </div>
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <textarea name="pdesc" placeholder="Project Description" id="message" rows="8" class="form-control form-control-lg"></textarea>
              </div>
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input type="file" name="fileUpload[]" multiple class="form-control form-control-lg">
              </div>
              <div class="col-lg-12 col-md-12 mb-3 d-grid text-center">
                <button type="submit" name="submit" id="button" class="rounded-pill pt-3 pb-3">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-4">
        <div class="container">
            <div class="row text-center">
                <h2 class="fw-bold mb-3">Python Projects</h2>
                <div class="heading-line mb-5"></div>
            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-6 col-md-12 bg-white p-3">
          <div class="form w-100 pb-2">
            <form method="POST" action="python.php" class="row" enctype="multipart/form-data">
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input name="pname" type="text" placeholder="Project Name" class="form-control form-control-lg">
              </div>
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <textarea name="pdesc" placeholder="Project Description" id="message" rows="8" class="form-control form-control-lg"></textarea>
              </div>
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input type="file" name="fileUpload[]" multiple class="form-control form-control-lg">
              </div>
              <div class="col-lg-12 col-md-12 mb-3 d-grid text-center">
                <button type="submit" name="submit" id="button" class="rounded-pill pt-3 pb-3">SUBMIT</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php
        } else header("Location: index.php");
    ?>
</body>

</html>