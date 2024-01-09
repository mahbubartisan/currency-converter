const BASE_URL = "https://api.exchangerate-api.com/v4/latest";

const fromAmountElement = document.querySelector(".InputAmount");
const convertedCurrencyElement = document.querySelector(".ConvertedAmount");
const fromCurrencyElement = document.querySelector(".fromCurrency");
const toCurrencyElement = document.querySelector(".toCurrency");
const totalConvertedAmountElement = document.querySelector(
    ".totalConvertedAmount"
);
const resultElement = document.querySelector(".result");
const formElement = document.querySelector(".form");

const countries = [
    { code: "EUR", name: "Euro" },
    { code: "GBP", name: "British pound" },
    { code: "INR", name: "Indian rupee" },
    { code: "USD", name: "United States dollar" },
    { code: "AED", name: "United Arab Emirates dirham" },
    { code: "AUD", name: "Australian dollar" },
    { code: "BGN", name: "Bulgarian lev" },
    { code: "BRL", name: "Brazilian real" },
    { code: "CAD", name: "Canadian dollar" },
    { code: "CHF", name: "Swiss franc" },
    { code: "CNY", name: "Chinese yuan" },
    { code: "CZK", name: "Czech koruna" },
    { code: "DKK", name: "Danish krone" },
    { code: "HKD", name: "Hong Kong dollar" },
    { code: "HUF", name: "Hungarian forint" },
    { code: "IDR", name: "Indonesian rupiah" },
    { code: "ILS", name: "Israeli shekel" },
    { code: "JPY", name: "Japanese yen" },
    { code: "MYR", name: "Malaysian ringgit" },
    { code: "NOK", name: "Norwegian krone" },
    { code: "NZD", name: "New Zealand dollar" },
    { code: "PLN", name: "Polish złoty" },
    { code: "RON", name: "Romanian leu" },
    { code: "SEK", name: "Swedish krona" },
    { code: "SGD", name: "Singapore dollar" },
    { code: "TRY", name: "Turkish lira" },
    { code: "UAH", name: "Ukrainian hryvnia" },
];

countries.forEach((country) => {
    const option1 = document.createElement("option");
    const option2 = document.createElement("option");
    option1.value = option2.value = country.code;
    option1.textContent =
        option2.textContent = `${country.code} (${country.name})`;
    fromCurrencyElement.appendChild(option1);
    toCurrencyElement.appendChild(option2);
});

const getExchangeRate = async () => {
    const amount = parseFloat(fromAmountElement.value);
    const fromCurrency = fromCurrencyElement.value;
    const toCurrency = toCurrencyElement.value;
    resultElement.textContent = "Fetching exchange rate...";

    try {
        const response = await fetch(`${BASE_URL}/${fromCurrency}`);
        const data = await response.json();
        const conversionRate = data.rates[toCurrency];
        console.log(conversionRate);
        // Get the fee amount
        const ourFeeElement = document.querySelector(".ourFee");
        const conversionRateElement = document.querySelector(".conversionRate");
        const ourFee = parseFloat(ourFeeElement.textContent);
        // Deduct the fee from the amount
        const afterOurFeeDeducted = amount - ourFee;
        totalConvertedAmountElement.textContent = afterOurFeeDeducted;
        const ConvertedAmount = afterOurFeeDeducted * conversionRate;
        convertedCurrencyElement.value = ConvertedAmount.toFixed(2);
        if (typeof conversionRate === "undefined") {
            resultElement.textContent = "Exchange rates is not available.";
            convertedCurrencyElement.value = "";
        } else {
            conversionRateElement.textContent = conversionRate;
            resultElement.textContent = `${amount.toLocaleString()} ${fromCurrency} = ${ConvertedAmount.toLocaleString()} ${toCurrency}`;
        }
    } catch (error) {
        formElement.innerHTML = `<h2 class="text-xl font-bold text-center text-red-500">Error! while fetching exchange rates...</h2>`;
    }
};

fromAmountElement.addEventListener("input", getExchangeRate);
fromCurrencyElement.addEventListener("change", getExchangeRate);
toCurrencyElement.addEventListener("change", getExchangeRate);
window.addEventListener("load", getExchangeRate);
