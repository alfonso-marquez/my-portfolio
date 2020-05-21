<template>
    <div style="background-color: none;" >
    <b-tab no-body title="About" active>
        <div class="container">
            <div class="row about mt-3">
                <div class="col-5">
                    <div class="about__overview col-12 mb-3">
                        <h4><strong>Info</strong></h4>
                        <p>Studied at <strong>Polytechnic University of the Philippines</strong></p>
                        <p>Went to <strong>Marikina Science High School</strong></p>
                        <p>Lives in <strong>Marikina City</strong></p>
                    </div>
                    <div class="about__experiences col-12 mb-3">
                        <h4>Experience</h4>
                        <p>Software Engineer at <strong>Blotocol Philippines, Inc.</strong></p>
                        <p>Self-employed as <strong>Freelance Programmer</strong></p>
                        <p>Software Associate at <strong>AOMOS</strong></p>
                        <p>Hardware Intern at <strong>RJPB Computer Trading</strong></p>
                    </div>
                    <div class="about__contact col-12 mb-3">
                        <h4>Contact</h4>
                        <p>Email: <strong>marquez.josealfonso@gmail.com</strong></p>
                        <p>Mobile Number: <strong>09052205985</strong></p>
                    </div>
                    <div class="copyright ml-4 pb-3">
                        ALFONSO MARQUEZ © <span class="year">2020</span>
                    </div>
                </div>
                <div class="about__skills col-7">
                    <h4><strong>Skills</strong></h4>
                    <canvas id="bar-chart" width="800" height="650"></canvas>
                </div>
            </div>
        </div>
    </b-tab>
    <b-tab title="Projects"><p>I'm the second tab</p></b-tab>
    <b-tab title="Interests" disabled><p>I'm a disabled tab!</p></b-tab>
</div>
</template>

<style>

</style>



<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
