<div class="ui small breadcrumb" style="margin: 20px 0px 10px 0px">
    <a class="section" href="/index.php">Home</a>
    <i class="right chevron icon divider"></i>
    <a class="section" href="/index.php?r=login-student.php">Student</a>
    <i class="right chevron icon divider"></i>
    <div class="active section">Signup</div>
</div>


<?php if (isset($error) && count($error) > 0): ?>
    <div class="ui warning message">
        <i class="close icon"></i>
        <?php for ($i = 0; $i < count($error); $i++): ?>
            <div class="header">
                <?= $error[$i]['error']; ?>
            </div>
            Please try with different combination
        <?php endfor; ?>
    </div>
<?php endif; ?>

<?php if (isset($success) && count($success) > 0): ?>
    <div class="ui success message">
        <i class="close icon"></i>
        <?php for ($i = 0; $i < count($success); $i++): ?>
            <div class="header">
                <?= $success[$i]['success']; ?>
            </div>
            Click login page to login <a href="<?= $_SERVER['HTTP_HOST'].'/index.php?r=login-student.php'  ?>">Link</a>
        <?php endfor; ?>
    </div>
<?php endif; ?>


<div class="ui vertical stripe quote segment">
    <div class="ui two column middle aligned center aligned grid very relaxed stackable grid">
        <div class="column">
            <form class="ui form segment" action="/index.php?r=signup-student.php" method="post">
                <div class="ui form">
                    <div class="field">
                        <!--<label>Username</label>-->
                        <div class="ui left icon input">
                            <input type="text" placeholder="Username" name="username">
                            <i class="user icon"></i>
                        </div>
                    </div>

                    <div class="field">
                        <!--<label>First name</label>-->
                        <div class="ui left icon input">
                            <input type="text" placeholder="First name" name="firstname">
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <!--<label>Last name</label>-->
                        <div class="ui left icon input">
                            <input type="text" placeholder="Last name" name="lastname">
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <!--<label>Password</label>-->
                        <div class="ui left icon input">
                            <input type="password" placeholder="Password" name="password">
                            <i class="lock icon"></i>
                        </div>
                    </div>
                    <div class="ui blue submit button">Signup</div>
                    <div class="ui error message"></div>
                </div>
            </form>
        </div>
        <div class="ui vertical divider">
            Or
        </div>
        <div class="center aligned column">
            <a href="/index.php?r=login-student.php" class="ui big green labeled icon button">
                <i class="signup icon"></i>
                Login
            </a>
        </div>

    </div>
</div>
<script>
    $(document).ready(function () {
        $('.ui.form')
            .form({
                fields: {
                    username: {
                        identifier: 'username',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Please enter your Username'
                            }
                        ]
                    },
                    firstname: {
                        identifier: 'firstname',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Please enter your First name'
                            }
                        ]
                    },
                    lastname: {
                        identifier: 'lastname',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Please enter your Last name'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Please enter a Password'
                            },
                            {
                                type: 'minLength[6]',
                                prompt: 'Your Password must be at least {ruleValue} characters'
                            }
                        ]
                    },
                    terms: {
                        identifier: 'terms',
                        rules: [
                            {
                                type: 'checked',
                                prompt: 'You must agree to the terms and conditions'
                            }
                        ]
                    }
                }
            });

    });

</script>