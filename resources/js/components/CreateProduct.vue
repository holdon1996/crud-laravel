<template>
  <div>
    <h3 class="text-center">Create Product</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form @submit.prevent="createProduct">
          <div class="form-group">
            <label for="">Name</label>
            <input
              type="text"
              name=""
              id=""
              class="form-control"
              v-model="product.name"
            />
          </div>
          <div class="form-group">
            <label for="">Detail</label>
            <input
              type="text"
              name=""
              id=""
              class="form-control"
              v-model="product.detail"
            />
          </div>

          <button class="btn btn-primary" type="submit" @click="createProduct">
            Save
          </button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      product: {},
    };
  },
  methods: {
    async createProduct() {
      await axios.post("/api/products/", this.product).then((res) => {
        this.$router.push({ name: "home" });
      });
    },
  },
};
</script>
