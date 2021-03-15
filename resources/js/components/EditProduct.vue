<template>
  <div>
    <h3 class="text-center">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form @submit.prevent="updateProduct">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" v-model="product.name" />
            </div>
            <div class="form-group">
              <label for="">Detail</label>
              <input
                type="text"
                class="form-control"
                v-model="product.detail"
              />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </h3>
  </div>
</template>

<script>
export default {
  data() {
    return {
      product: {},
    };
  },
  created() {
    this.axios.get(`/api/products/${this.$route.params.id}`).then((res) => {
      this.product = res.data;
    });
  },
  methods: {
    async updateProduct() {
      await axios
        .put(`/api/products/${this.$route.params.id}`, this.product)
        .then((res) => {
          this.$router.push({ name: "home" });
        });
    },
  },
};
</script>
