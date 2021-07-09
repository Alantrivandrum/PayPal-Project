/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content
    This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

/* Change content in textareas when clicking a certain dropdown button */
function ChangeText(content) {

    switch(content) {
        case "product":
            document.getElementById("textarea1").value = 'Product';
            document.getElementById("textarea2").value = 'Product';
            document.getElementById("textarea3").value = 'Product';
            break;
        case "apiCall":
            document.getElementById("textarea1").value = 'APICall';
            document.getElementById("textarea2").value = 'APICall';
            document.getElementById("textarea3").value = 'APICall';
            break;
        case "something":
            document.getElementById("textarea1").value = 'Something';
            document.getElementById("textarea2").value = 'Something';
            document.getElementById("textarea3").value = 'Something';
            break;
        case "somethingElse":
            document.getElementById("textarea1").value = 'Something Else';
            document.getElementById("textarea2").value = 'Something Else';
            document.getElementById("textarea3").value = 'Something Else';
            break;
        // Payments

        case "createOrder":
            document.getElementById("textarea1").value = 'Create Order';
            document.getElementById("textarea2").value = 'Create Order';
            document.getElementById("textarea3").value = 'Create Order';
            break;
        case "showOrder":
            document.getElementById("textarea1").value = 'Show Order';
            document.getElementById("textarea2").value = 'Show Order';
            document.getElementById("textarea3").value = 'Show Order';
            break;
        case "captureOrder":
            document.getElementById("textarea1").value = 'Capture Order';
            document.getElementById("textarea2").value = 'Capture Order';
            document.getElementById("textarea3").value = 'Capture Order';
            break;
        case "authoriseOrder":
            document.getElementById("textarea1").value = 'Authorise Order';
            document.getElementById("textarea2").value = 'Authorise Order';
            document.getElementById("textarea3").value = 'Authorise Order';
            break;
        case "refund":
            document.getElementById("textarea1").value = 'Refund';
            document.getElementById("textarea2").value = 'Refund';
            document.getElementById("textarea3").value = 'Refund';
            break;

        // Reference Transactions
        case "createToken":
            document.getElementById("textarea1").value = 'Create Token';
            document.getElementById("textarea2").value = 'Create Token';
            document.getElementById("textarea3").value = 'Create Token';
            break;
        case "showDetails":
            document.getElementById("textarea1").value = 'Show Details';
            document.getElementById("textarea2").value = 'Show Details';
            document.getElementById("textarea3").value = 'Show Details';
            break;
        case "createAgreement":
            document.getElementById("textarea1").value = 'Create Agreement';
            document.getElementById("textarea2").value = 'Create Agreement';
            document.getElementById("textarea3").value = 'Create Agreement';
            break;
        case "showAgreement":
            document.getElementById("textarea1").value = 'Show Agreement';
            document.getElementById("textarea2").value = 'Show Agreement';
            document.getElementById("textarea3").value = 'Show Agreement';
            break;
        case "cancelAgreement":
            document.getElementById("textarea1").value = 'Cancel Agreement';
            document.getElementById("textarea2").value = 'Cancel Agreement';
            document.getElementById("textarea3").value = 'Cancel Agreement';
            break;

        // Subscriptions
        case "createProduct":
            document.getElementById("textarea1").value = 'Create Product';
            document.getElementById("textarea2").value = 'Create Product';
            document.getElementById("textarea3").value = 'Create Product';
            break;
        case "createPlan":
            document.getElementById("textarea1").value = 'Create Plan';
            document.getElementById("textarea2").value = 'Create Plan';
            document.getElementById("textarea3").value = 'Create Plan';
            break;
        case "activatePlan":
            document.getElementById("textarea1").value = 'Activate Plan';
            document.getElementById("textarea2").value = 'Activate Plan';
            document.getElementById("textarea3").value = 'Activate Plan';
            break;
        case "createSubscription":
            document.getElementById("textarea1").value = 'Create Subscription';
            document.getElementById("textarea2").value = 'Create Subscription';
            document.getElementById("textarea3").value = 'Create Subscription';
            break;
        case "activateSubscription":
            document.getElementById("textarea1").value = 'Activate Subscription';
            document.getElementById("textarea2").value = 'Activate Subscription';
            document.getElementById("textarea3").value = 'Activate Subscription';
            break;
        case "suspendSubscription":
            document.getElementById("textarea1").value = 'Suspend Subscription';
            document.getElementById("textarea2").value = 'Suspend Subscription';
            document.getElementById("textarea3").value = 'Suspend Subscription';
            break;
        case "authoriseSubscription":
            document.getElementById("textarea1").value = 'Authorise Subscription';
            document.getElementById("textarea2").value = 'Authorise Subscription';
            document.getElementById("textarea3").value = 'Authorise Subscription';
            break;
        default:
            document.getElementById("textarea1").value = 'Error';
            document.getElementById("textarea2").value = 'Error';
            document.getElementById("textarea3").value = 'Error';
            break;
    }
}