<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Penerimaan Barang</div>

                    <div class="card-body">
                       <div class="row">
                       <div class="col">
                        <label for="nik">NIK Penerima</label>
                        <input type="text" class="form-control" placeholder="NIK Penerima">
                       </div>
                       <div class="col"></div>
                       <div class="col"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
