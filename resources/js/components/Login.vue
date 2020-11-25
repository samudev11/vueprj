<template>
  <div style="margin-top:2em;">
    <mdb-card class="offset-md-4 col-md-4 col-sm-12">
      <mdb-card-body>
        <form>
          <p class="h4 text-center mb-4">Sign in</p>
          <div class="grey-text">
            <mdb-input label="Your email" icon="envelope" type="email" />
            <mdb-input label="Your password" icon="lock" type="password" />
          </div>
          <div class="text-center">
            <mdb-btn>Login</mdb-btn>
          </div>
        </form>
      </mdb-card-body>
    </mdb-card>
  </div>
</template>

<script>
import { mdbInput, mdbBtn, mdbCard, mdbCardBody } from "mdbvue";
export default {
  name: "Basic",
  components: {
    mdbInput,
    mdbBtn,
    mdbCard,
    mdbCardBody,
  },
};
</script>