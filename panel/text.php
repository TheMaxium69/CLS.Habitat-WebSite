<?php include "app.php"; navbar(4); ?>

<main>


    <?php
    echo "Page -> Text";

    if (empty($_SESSION['userIdLog'])){
        header("location: index.php");
    }

    if (!empty($_GET['name'])){

        $name = $_GET['name'];
        $content = $_GET['content'];

        editGeneral($name, $content);
    }


    $AllEnv = getAllEnv();

    foreach ($AllEnv as $EnvSection){
        if ($EnvSection['name'] == "slog"){ $SectionSlogan = $EnvSection; }
        if ($EnvSection['name'] == "about"){ $SectionAbout = $EnvSection; }
        if ($EnvSection['name'] == "part"){ $SectionPart = $EnvSection; }
        if ($EnvSection['name'] == "col1"){ $SectionCol1 = $EnvSection; }
        if ($EnvSection['name'] == "col2"){ $SectionCol2 = $EnvSection; }
        if ($EnvSection['name'] == "contact"){ $SectionContact = $EnvSection; }
    }

    ?>

    <div class="container py-5">

        <h2 style="text-align: center">Slogan</h2>

        <table class="container py-5">
            <tr>
                <td><?php echo $SectionSlogan['content'] ?></td>
                <td><a href="?edit=<?php echo $SectionSlogan['name'] ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
        </table>
        <br>
        <form <?php if (empty($_GET['edit']) || $_GET['edit'] != "slog"){ echo "style='display: none'"; } ?> method="GET">
            <input type="hidden" name="name" value="<?php echo $_GET['edit'] ?>">
            <div class="form-group">
                <textarea style="height: 298px;" class="form-control" placeholder="Edit" required name="content"><?= $SectionSlogan['content'] ?></textarea>
                <small class="form-text text-muted">Ce mail sera changer sur tout le site</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Vous comfirmer changer ça sur tout le site</label>
            </div>
            <button type="submit" class="btn btn-success">Enregistrez</button>
        </form>
    </div>

    <div class="container py-5">

        <h2 style="text-align: center">à propos</h2>

        <table class="container py-5">
            <tr>
                <td><?php echo $SectionAbout['content'] ?></td>
                <td><a href="?edit=<?php echo $SectionAbout['name'] ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
        </table>
        <br>
        <form <?php if (empty($_GET['edit']) || $_GET['edit'] != "about"){ echo "style='display: none'"; } ?> method="GET">
            <input type="hidden" name="name" value="<?php echo $_GET['edit'] ?>">
            <div class="form-group">
                <textarea style="height: 298px;" class="form-control" placeholder="Edit" required name="content"><?= $SectionAbout['content'] ?></textarea>
                <small class="form-text text-muted">Ce text sera changer sur tout le site</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Vous comfirmer changer ça sur tout le site</label>
            </div>
            <button type="submit" class="btn btn-success">Enregistrez</button>
        </form>
    </div>

    <div class="container py-5">

        <h2 style="text-align: center">Particulier</h2>

        <table class="container py-5">
            <tr>
                <td><?php echo $SectionPart['content'] ?></td>
                <td><a href="?edit=<?php echo $SectionPart['name'] ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
        </table>
        <br>
        <form <?php if (empty($_GET['edit']) || $_GET['edit'] != "part"){ echo "style='display: none'"; } ?> method="GET">
            <input type="hidden" name="name" value="<?php echo $_GET['edit'] ?>">
            <div class="form-group">
                <textarea style="height: 298px;" class="form-control" placeholder="Edit" required name="content"><?= $SectionPart['content'] ?></textarea>
                <small class="form-text text-muted">Ce text sera changer sur tout le site</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Vous comfirmer changer ça sur tout le site</label>
            </div>
            <button type="submit" class="btn btn-success">Enregistrez</button>
        </form>
    </div>

    <div class="container py-5">

        <h2 style="text-align: center">Collectivité</h2>

        <table class="container py-5">
            <tr>
                <td><?php echo $SectionCol1['content'] ?></td>
                <td><a href="?edit=<?php echo $SectionCol1['name'] ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
        </table>
        <br>
        <form <?php if (empty($_GET['edit']) || $_GET['edit'] != "col1"){ echo "style='display: none'"; } ?> method="GET">
            <input type="hidden" name="name" value="<?php echo $_GET['edit'] ?>">
            <div class="form-group">
                <textarea style="height: 298px;" class="form-control" placeholder="Edit" required name="content"><?= $SectionCol1['content'] ?></textarea>
                <small class="form-text text-muted">Ce text sera changer sur tout le site</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Vous comfirmer changer ça sur tout le site</label>
            </div>
            <button type="submit" class="btn btn-success">Enregistrez</button>
        </form>
    </div>

    <div class="container py-5">

        <h2 style="text-align: center">Collectivité 2</h2>

        <table class="container py-5">
            <tr>
                <td><?php echo $SectionCol2['content'] ?></td>
                <td><a href="?edit=<?php echo $SectionCol2['name'] ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
        </table>
        <br>
        <form <?php if (empty($_GET['edit']) || $_GET['edit'] != "col2"){ echo "style='display: none'"; } ?> method="GET">
            <input type="hidden" name="name" value="<?php echo $_GET['edit'] ?>">
            <div class="form-group">
                <textarea style="height: 298px;" class="form-control" placeholder="Edit" required name="content"><?= $SectionCol2['content'] ?></textarea>
                <small class="form-text text-muted">Ce text sera changer sur tout le site</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Vous comfirmer changer ça sur tout le site</label>
            </div>
            <button type="submit" class="btn btn-success">Enregistrez</button>
        </form>
    </div>

    <div class="container py-5">

        <h2 style="text-align: center">à propos</h2>

        <table class="container py-5">
            <tr>
                <td><?php echo $SectionContact['content'] ?></td>
                <td><a href="?edit=<?php echo $SectionContact['name'] ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
        </table>
        <br>
        <form <?php if (empty($_GET['edit']) || $_GET['edit'] != "contact"){ echo "style='display: none'"; } ?> method="GET">
            <input type="hidden" name="name" value="<?php echo $_GET['edit'] ?>">
            <div class="form-group">
                <textarea style="height: 298px;" class="form-control" placeholder="Edit" required name="content"><?= $SectionContact['content'] ?></textarea>
                <small class="form-text text-muted">Ce text sera changer sur tout le site</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Vous comfirmer changer ça sur tout le site</label>
            </div>
            <button type="submit" class="btn btn-success">Enregistrez</button>
        </form>
    </div>




    <br>

    <style>
        i.fas {
            color: #4D8D4C;
        }
    </style>


</main>


</body> </html>