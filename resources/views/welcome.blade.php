<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="container-full bg-gray-300 mb-10">
        <h1 class="text-dark text-center text-5xl py-5 px-1"> Bill Generator </h1>
    </div>

    <div class="container mx-auto">

        <div class="flex">
            {{-- form part start --}}
            <div class="w-1/3 border-r pr-12">
                <h2 class="text-2xl border-b mb-4"> Form </h2>
                <form action="#">

                    {{-- Website's Name --}}
                    <label for="website-name" class="pb-1 block"> Website's Name </label>
                    <div class="border mb-3">
                        <input type="text" name="website-name" id="website-name" placeholder="Website's Name"
                            class="w-full p-2">
                    </div>

                    {{-- Address --}}
                    <label for="website-name" class="pb-1 block"> Address </label>
                    <div class="border mb-3">
                        <input type="text" name="address" id="website-name" placeholder="address" class="w-full p-2">
                    </div>

                    {{-- domain item --}}
                    <label for="domain-item block" class="pb-1 block"> Domain Item </label>
                    <div class="border mb-3">
                        <select name="domain-item" id="domain-item" class="w-full p-2">
                            <option value="com"> .com </option>
                            <option value="net"> .net </option>
                            <option value="org"> .org </option>
                            <option value="ac.bd"> .ac.bd </option>
                        </select>
                    </div>

                    {{-- hosting item --}}
                    <label for="hosting-grade" class="pb-1 block"> Hosting </label>
                    <div class="flex mb-3">
                        <div class="w-1/2 mr-5">
                            <div class="border">
                                <select name="hosting-grade" id="hosting-grade" class="w-full p-2">
                                    <option value="First Grade"> First Grade </option>
                                    <option value="Second Grade"> Second Grade </option>
                                    <option value="Third Grade"> Third Grade </option>
                                </select>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="border">
                                <input type="number" name="hosting-volumn" id="hosting-volumn" placeholder="GB"
                                    class="w-full p-2">
                            </div>
                        </div>
                    </div>

                    {{-- support fee --}}
                    <label for="support-fee" class="pb-1 block"> Support Fee </label>
                    <div class="border mb-3">
                        <input type="number" name="support-fee" id="support-fee" placeholder="6,000"
                            class="w-full p-2">
                    </div>

                    <input type="submit" value="Submit"
                        class="btn bg-green-600 hover:bg-green-700 px-3 py-2 rounded-sm cursor-pointer text-white">
                    <input type="reset" value="Reset"
                        class="btn bg-gray-600 hover:bg-gray-700 px-3 py-2 rounded-sm cursor-pointer text-white">

                </form>
            </div>
            {{-- form part end --}}

            {{-- preview part start --}}
            <div class="w-1/3"></div>
            {{-- preview part end --}}
        </div>
    </div>

</body>

</html>
