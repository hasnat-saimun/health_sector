
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">প্রয়োজনীয় এরিয়া নির্ধারণ করুন</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-info">
                                    <div class="row align-items-center">
                                    <div class="col-12 mx-auto">
                                        <form>
                                            <div class="row mb-2">
                                            <div class="col-6">
                                                <label for="cardType" class="form-label ">বিভাগ</label>
                                                <select id="cardType" class="form-select form-select-sm">
                                                    <option selected>--</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="cardType" class="form-label ">জেলা </label>
                                                <select id="cardType" class="form-select form-select-sm">
                                                    <option selected>--</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mt-2">
                                                <label for="cardType" class="form-label ">উপজেলা/পৌরসভা</label>
                                                <select id="cardType" class="form-select form-select-sm">
                                                    <option selected>--</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mt-2">
                                                <label for="cardType" class="form-label ">ইউনিয়ন</label>
                                                <select id="cardType" class="form-select form-select-sm">
                                                    <option selected>--</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                                <button class="btn btn-light  btn-sm" type="button">খুঁজুন</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('navModal')