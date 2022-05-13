<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                    name</label>
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:ring-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-2 py-2">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                    name</label>
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:ring-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-2 py-2">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <input type="text" name="email-address" id="email-address" autocomplete="email"
                                    class="mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:ring-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-2 py-2">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                <select name="country" wire:model="country" autocomplete="country-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach($countries as $country)
                                    <option value={{ $country }}>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="region" class="block text-sm font-medium text-gray-700">State /
                                    Province</label>
                                <input type="text" name="region" id="region" autocomplete="address-level1"
                                    class="mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:ring-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-2 py-2">
                            </div>

                            <div class="col-span-6">
                                <label for="street-address" class="block text-sm font-medium text-gray-700">Street
                                    address</label>
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:ring-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-2 py-2">
                            </div>


                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <select name="city" wire:model="city" autocomplete="city-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value=''>Choose a city</option>
                                    @foreach($cities as $city)
                                    <option value={{ $city->id }}>{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                                    Postal code</label>
                                <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code"
                                    class="mt-1 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:ring-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md px-2 py-2">
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
