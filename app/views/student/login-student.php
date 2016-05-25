<div class="ui small breadcrumb" style="margin: 20px 0px 10px 0px">
    <a class="section" href="/index.php">Home</a>
    <i class="right chevron icon divider"></i>
    <a class="section" href="/index.php?r=signup-student.php">Student</a>
    <i class="right chevron icon divider"></i>
    <div class="active section">Login</div>
</div>



<div class="ui vertical stripe quote segment" >
    <div class="ui two column middle aligned center aligned grid very relaxed stackable grid">
        <div class="column">
            <form class="ui form segment" action="/index.php?r=login-student.php" method="post">
                <div class="ui form">
                    <div class="field">
                        <!--<label>Username</label>-->
                        <div class="ui left icon input">
                            <input type="text" placeholder="Username" name="username">
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <!--<label>Password</label>-->
                        <div class="ui left icon input">
                            <input type="password" name="password">
                            <i class="lock icon"></i>
                        </div>
                    </div>
                    <div class="ui blue submit button">Login</div>
                    <div class="ui error message"></div>
                </div>
            </form>
        </div>
        <div class="ui vertical divider">
            Or
        </div>
        <div class="center aligned column">
            <a href="/index.php?r=signup-student.php" class="ui big green labeled icon button">
                <i class="signup icon"></i>
                Sign Up
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
                                prompt: 'Please enter your name'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Please enter a password'
                            },
                            {
                                type: 'minLength[6]',
                                prompt: 'Your password must be at least {ruleValue} characters'
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