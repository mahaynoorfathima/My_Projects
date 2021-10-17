<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Lato:400, 700,300);
body {
  background-color: #ffb242;
  font-family: lato, 'helvetica-light';
  position: relative;
  text-transform: uppercase;
  padding: 20px 0;
}

#amount {
  font-size: 12px;
}

#amount strong {
  font-size: 14px;
}

#card-back {
  top: 40px;
  right: 0;
  z-index: -2;
}

#card-btn {
  background-color: rgba(251, 251, 251, 0.8);
  color: #ffb242;
  position: absolute;
  bottom: -55px;
  right: 0;
  width: 150px;
  border-radius: 8px;
  height: 42px;
  font-size: 12px;
  font-family: lato, 'helvetica-light', 'sans-serif';
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 400;
  outline: none;
  border: none;
  cursor: pointer;
}

#card-btn:hover {
  background-color: rgba(251, 251, 251, 1);
}

#card-cvc {
  width: 60px;
  margin-bottom: 0;
}

#card-front,
#card-back {
  position: absolute;
  background-color: #498ee4;
  width: 390px;
  height: 250px;
  border-radius: 6px;
  padding: 20px 30px 0;
  box-sizing: border-box;
  font-size: 10px;
  letter-spacing: 1px;
  font-weight: 300;
  color: white;
}

#card-image {
  float: right;
  height: 100%;
}

#card-image i {
  font-size: 40px;
}

#card-month {
  width: 45% !important;
}

#card-number,
#card-holder {
  width: 100%;
}

#card-stripe {
  width: 100%;
  height: 55px;
  background-color: #3d5266;
  position: absolute;
  right: 0;
}

#card-success {
  color: #00b349;
}

#card-token {
  display: none;
}

#card-year {
  width: 45%;
  float: right;
}

#cardholder-container {
  width: 60%;
  display: inline-block;
}

#cvc-container {
  position: absolute;
  width: 110px;
  right: -115px;
  bottom: -10px;
  padding-left: 20px;
  box-sizing: border-box;
}

#cvc-container label {
  width: 100%;
}

#cvc-container p {
  font-size: 6px;
  text-transform: uppercase;
  opacity: 0.6;
  letter-spacing: .5px;
}

#form-container {
  margin: auto;
  width: 500px;
  height: 290px;
  position: relative;
}

#form-errors {
  color: #eb0000;
}

#form-errors,
#card-success {
  background-color: white;
  width: 500px;
  margin: 0 auto 10px;
  height: 50px;
  border-radius: 8px;
  padding: 0 20px;
  font-weight: 400;
  box-sizing: border-box;
  line-height: 46px;
  letter-spacing: .5px;
  text-transform: none;
}

#form-errors p,
#card-success p {
  margin: 0 5px;
  display: inline-block;
}

#exp-container {
  margin-left: 10px;
  width: 32%;
  display: inline-block;
  float: right;
}

.hidden {
  display: none;
}

#image-container {
  width: 100%;
  position: relative;
  height: 55px;
  margin-bottom: 5px;
  line-height: 55px;
}

#image-container img {
  position: absolute;
  right: 0;
  top: 0;
}

input {
  border: none;
  outline: none;
  background-color: #5a9def;
  height: 30px;
  line-height: 30px;
  padding: 0 10px;
  margin: 0 0 25px;
  color: white;
  font-size: 10px;
  box-sizing: border-box;
  border-radius: 4px;
  font-family: lato, 'helvetica-light', 'sans-serif';
  letter-spacing: .7px;
}

input::-webkit-input-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input:-moz-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input::-moz-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input:-ms-input-placeholder {
  color: #fff;
  opacity: 0.7;
  font-family: lato, 'helvetica-light', 'sans-serif' letter-spacing: 1px;
  font-weight: 300;
  letter-spacing: 1px;
  font-size: 10px;
}

input.invalid {
  border: solid 2px #eb0000;
  height: 34px;
}

label {
  display: block;
  margin: 0 auto 7px;
}

#shadow {
  position: absolute;
  right: 0;
  width: 284px;
  height: 214px;
  top: 36px;
  background-color: #000;
  z-index: -1;
  border-radius: 8px;
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
}



	</style>
<script type="text/javascript">
	$(document).ready(function validation() {

    Stripe.setPublishableKey('pk_test_9D43kM3d2vEHZYzPzwAblYXl');

    var cardNumber, cardMonth, cardYear, cardCVC, cardHolder;

    // check for any empty inputs
    function findEmpty() {
        var emptyText = $('#form-container input').filter(function () {

            return $(this).val == null;
        });

        // add invalid class to empty inputs
        console.log(emptyText.prevObject);
        emptyText.prevObject.addClass('invalid');
    }

    // check for card type and display corresponding icon
    function checkCardType() {
        cardNumber = $('#card-number').val();
        var cardType = Stripe.card.cardType(cardNumber);
        switch (cardType) {
            case 'Visa':
                $('#card-image').html('<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGlkPSLQodC70L7QuV8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48Zz48cGF0aCBkPSJNMTE3Ljg4NiwxMDMuMDU1SDEwLjExNEM1LjYzMywxMDMuMDU1LDIsOTkuNDIyLDIsOTQuOTQxVjMzLjA1OWMwLTQuNDgxLDMuNjMzLTguMTE0LDguMTE0LTguMTE0aDEwNy43NzEgICBjNC40ODEsMCw4LjExNCwzLjYzMyw4LjExNCw4LjExNHY2MS44ODFDMTI2LDk5LjQyMiwxMjIuMzY3LDEwMy4wNTUsMTE3Ljg4NiwxMDMuMDU1eiIgZmlsbD0iI0YwRUZFRiIvPjxnPjxnPjxwb2x5Z29uIGZpbGw9IiMzNTUxNjkiIHBvaW50cz0iNDkuMjMsNzguODg4IDU0LjI5LDQ5LjE4NiA2Mi4zODksNDkuMTg2IDU3LjMyLDc4Ljg4OCA0OS4yMyw3OC44ODggICAgIi8+PHBhdGggZD0iTTg2LjY4Nyw0OS45MThjLTEuNjA0LTAuNjAzLTQuMTE4LTEuMjQ4LTcuMjU3LTEuMjQ4Yy04LDAtMTMuNjM1LDQuMDI4LTEzLjY4NCw5LjgwMiAgICAgYy0wLjA0NSw0LjI2Nyw0LjAyMiw2LjY1LDcuMDkzLDguMDdjMy4xNTMsMS40NTYsNC4yMTMsMi4zODUsNC4xOTksMy42ODVjLTAuMDIzLDEuOTkxLTIuNTE4LDIuODk5LTQuODQ3LDIuODk5ICAgICBjLTMuMjM5LDAtNC45Ni0wLjQ0OS03LjYxOS0xLjU1OGwtMS4wNDItMC40NzFsLTEuMTM3LDYuNjVjMS44ODksMC44MjksNS4zODYsMS41NDcsOS4wMTksMS41ODMgICAgIGM4LjUxMSwwLDE0LjAzMy0zLjk4MiwxNC4wOTctMTAuMTQ5YzAuMDMyLTMuMzc3LTIuMTI0LTUuOTQ4LTYuNzk1LTguMDY5Yy0yLjgzMS0xLjM3NS00LjU2Ni0yLjI5MS00LjU0OC0zLjY4MyAgICAgYzAtMS4yMzQsMS40NjgtMi41NTUsNC42MzktMi41NTVjMi42NDUtMC4wNDIsNC41NjYsMC41MzYsNi4wNTYsMS4xMzhsMC43MjksMC4zNDNMODYuNjg3LDQ5LjkxOEw4Ni42ODcsNDkuOTE4eiIgZmlsbD0iIzM1NTE2OSIvPjxwYXRoIGQ9Ik0xMDcuNDQ3LDQ5LjIxNWgtNi4yNTZjLTEuOTM5LDAtMy4zODgsMC41MjktNC4yNCwyLjQ2M0w4NC45Myw3OC45aDguNTAzYzAsMCwxLjM4Ni0zLjY2LDEuNzAzLTQuNDY0ICAgICBjMC45MjksMCw5LjE4NywwLjAxNCwxMC4zNjksMC4wMTRjMC4yNCwxLjAzOSwwLjk4Myw0LjQ1LDAuOTgzLDQuNDVoNy41MTVMMTA3LjQ0Nyw0OS4yMTVMMTA3LjQ0Nyw0OS4yMTV6IE05Ny40NjMsNjguMzYxICAgICBjMC42Ny0xLjcxMiwzLjIyNS04LjMwNCwzLjIyNS04LjMwNGMtMC4wNDUsMC4wNzksMC42NjYtMS43MiwxLjA3NC0yLjgzNmwwLjU0OCwyLjU2MmMwLDAsMS41NDksNy4wOSwxLjg3NSw4LjU3OEg5Ny40NjMgICAgIEw5Ny40NjMsNjguMzYxeiIgZmlsbD0iIzM1NTE2OSIvPjxwYXRoIGQ9Ik00Mi40NCw0OS4yMDhsLTcuOTI3LDIwLjI1NmwtMC44NDctNC4xMTVjLTEuNDcyLTQuNzQ3LTYuMDctOS44ODktMTEuMjExLTEyLjQ2Mmw3LjI0OCwyNS45NzggICAgIGw4LjU2Ni0wLjAxMWwxMi43NDctMjkuNjQ2SDQyLjQ0TDQyLjQ0LDQ5LjIwOHoiIGZpbGw9IiMzNTUxNjkiLz48cGF0aCBkPSJNMjcuMTYxLDQ5LjE5SDE0LjEwMmwtMC4xLDAuNjE3YzEwLjE1NiwyLjQ2LDE2Ljg3OCw4LjQwMiwxOS42NjQsMTUuNTQyTDMwLjgzLDUxLjY5NyAgICAgQzMwLjM0MSw0OS44MTYsMjguOTE4LDQ5LjI1NSwyNy4xNjEsNDkuMTlMMjcuMTYxLDQ5LjE5eiIgZmlsbD0iI0Y2Q0E0MSIvPjwvZz48L2c+PHBhdGggZD0iTTIsMzMuMDU5djYuODg2aDEyNHYtNi44ODZjMC00LjQ4MS0zLjYzMy04LjExNC04LjExNC04LjExNEgxMC4xMTRDNS42MzMsMjQuOTQ1LDIsMjguNTc4LDIsMzMuMDU5eiIgZmlsbD0iIzM1NTA2NyIvPjxwYXRoIGQ9Ik0yLDg3Ljk2M3Y2Ljk3N2MwLDQuMDg3LDMuMDI1LDcuNDU5LDYuOTU3LDguMDIzaDExMC4wODZjMy45MzItMC41NjMsNi45NTctMy45MzUsNi45NTctOC4wMjN2LTYuOTc3SDJ6IiBmaWxsPSIjRjZDQTQxIi8+PC9nPjwvc3ZnPg==" height="100%">');
                break;
               case 'Master Card':
                $('#card-image').html('<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGlkPSLQodC70L7QuV8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48Zz48cGF0aCBkPSJNMTE3Ljg4NiwxMDMuMDU1SDEwLjExNEM1LjYzMywxMDMuMDU1LDIsOTkuNDIyLDIsOTQuOTQxVjMzLjA1OWMwLTQuNDgxLDMuNjMzLTguMTE0LDguMTE0LTguMTE0aDEwNy43NzEgICBjNC40ODEsMCw4LjExNCwzLjYzMyw4LjExNCw4LjExNHY2MS44ODFDMTI2LDk5LjQyMiwxMjIuMzY3LDEwMy4wNTUsMTE3Ljg4NiwxMDMuMDU1eiIgZmlsbD0iIzQ2QjE5QiIvPjxnPjxwYXRoIGQ9Ik01NC43MjcsNjQuMDg1YzAtMTUuMzk0LDEyLjQ3OS0yNy44NzIsMjcuODczLTI3Ljg3MmMxNS4zOTUsMCwyNy44NywxMi40NzcsMjcuODcsMjcuODcyICAgIGMwLDE1LjM5Mi0xMi40NzUsMjcuODcyLTI3Ljg3LDI3Ljg3MkM2Ny4yMDYsOTEuOTU3LDU0LjcyNyw3OS40NzcsNTQuNzI3LDY0LjA4NUw1NC43MjcsNjQuMDg1eiIgZmlsbD0iI0Y2Q0E0MSIvPjxwYXRoIGQ9Ik02My45Myw0My4zMzhjMC4wMTQsMC0xLjQ1OSwxLjI3NC0yLjQ0NCwyLjUyMmg0Ljk1OWMwLDAsMS42OTUsMS44MzMsMi4zMjIsMy4yMTZoLTkuNjkyICAgIGMwLDAtMC45MzksMS40NzYtMS41NjQsMi43MjRoMTIuODJjMCwwLDEuMTcyLDIuMTkzLDEuNDI3LDMuMzUxSDU2LjE3MWMwLDAtMC41MzUsMS41MTktMC43NTksMi42MzZsMTcuMDYzLTAuMDIyICAgIGMwLjQ2OSwyLjE0MywxLjYwNyw4LjM3My0wLjczOCwxNS4yNTVsLTE1LjUsMC4wMjFjMC4yNDcsMC44MjQsMC42NywxLjk0MywxLjA3MiwyLjc2N2gxMy4zMTIgICAgYy0wLjUzOCwxLjExOS0xLjMyLDIuNTI0LTEuNzY3LDMuMjMzbC05Ljc1OSwwLjAwN2MwLjUxNSwwLjc4MSwxLjM0LDIuMDEsMS44NzYsMi41N2w2LjAwOS0wLjAwMyAgICBjLTEuMTI4LDEuNTU3LTMuMDM4LDMuMTctMy4wMzgsMy4xN2gtMC4wNDdsMC4wNjIsMC4wMjFjLTQuOTM3LDQuNDQ2LTExLjQ3NCw3LjE1MS0xOC42NDEsNy4xNTEgICAgYy0xNS4zOTQsMC0yNy44NzItMTIuNDgtMjcuODcyLTI3Ljg3MmMwLTE1LjM5NCwxMi40NzctMjcuODcyLDI3Ljg3Mi0yNy44NzJDNTIuNDcxLDM2LjIxMyw1OC45OTUsMzguOTA3LDYzLjkzLDQzLjMzOCAgICBMNjMuOTMsNDMuMzM4eiIgZmlsbD0iI0M1NUM0NCIvPjxnPjxwYXRoIGQ9Ik01MC43Miw1OS43MjdsLTAuNDUsMi41MDdsLTIuNDQ1LTAuMDYyYzAsMC0xLjIyMSwwLjMxOS0xLjIyMSwwLjgzNGMwLDAuNTE0LDAuOSwxLjE1OSwyLjI1MSwxLjczNiAgICAgYzEuMzUyLDAuNTgxLDEuNDE2LDIuMTg2LDEuMjg2LDMuMjgxYy0wLjEyOCwxLjA5My0wLjMyMSwzLjM2Mi00LjI0NCwzLjQ3NGMtMi4yNTIsMC4wNjQtMy40NzQtMC4zODYtMy40NzQtMC4zODZsMC41MTUtMi41NzIgICAgIGMwLDAsMi44OTUsMC43NzIsMy41MzgsMC4zMjFjMC42NDMtMC40NSwxLjQxNS0xLjIyMiwwLjE5Mi0xLjczNmMtMS4yMjEtMC41MTQtMy4yMTYtMS4zNTMtMy4yMTYtMy40MDggICAgIGMwLTIuMDU4LDAuODM2LTMuMjE2LDIuMTIzLTMuNzk2QzQ2Ljg1OSw1OS4zNDEsNDkuMTExLDU5LjQwMyw1MC43Miw1OS43MjdMNTAuNzIsNTkuNzI3eiIgZmlsbD0iI0ZGRkZGRiIvPjxwb2x5Z29uIGZpbGw9IiNGRkZGRkYiIHBvaW50cz0iMzEuMzk2LDcxLjIgMjguNTUzLDcxLjIgMzAuMjA2LDYxLjQyNyAyNi42OTIsNzEuMTQxIDI0LjczMSw3MS4xNDEgMjQuMjU3LDYxLjAzOCAyMi41MzgsNzEuMiAgICAgIDE5Ljg0OSw3MS4yIDIyLjM4Myw1Ni4yODUgMjUuNjQ1LDU2LjI4NSAyNi43ODcsNjQuODczIDMwLjU4LDU2LjI4NSAzMy45Myw1Ni4yODUgMzEuMzk2LDcxLjIgICAgIi8+PHBhdGggZD0iTTUzLjI1OSw3MS40MDhjLTAuOTI1LDAtMS41ODYtMC4yMDgtMS45ODItMC41OThjLTAuMzk5LTAuNDE3LTAuNTk3LTEuMDQ2LTAuNTk3LTEuODUyICAgICBjMC0wLjIxLDAuMDIyLTAuNDE3LDAuMDQ1LTAuNmMwLjAyMi0wLjIwNywwLjA2NS0wLjQ0NSwwLjA4OC0wLjcxNmwxLjcwOS05LjU0NWgyLjY2NmwtMC4zODgsMS44NjRoMi40OWwtMC40MTgsMi4zNTloLTIuNDg5ICAgICBMNTMuNyw2Ni4zOWMtMC4wNDQsMC4yNjYtMC4wODgsMC41MzUtMC4xMzMsMC44MzNjLTAuMDQzLDAuMjcxLTAuMDY1LDAuNTQxLTAuMDY1LDAuNzE5YzAsMC40MTcsMC4wNjUsMC42ODgsMC4yNDEsMC44MzggICAgIGMwLjE1NSwwLjE0OCwwLjQyLDAuMjQsMC43NzEsMC4yNGMwLjEzMywwLDAuMzA5LTAuMDMzLDAuNTI4LTAuMDkxYzAuMjIyLTAuMDg4LDAuNDIxLTAuMTQ4LDAuNTUyLTAuMjRoMC4yMjFsLTAuNDE5LDIuMzkzICAgICBjLTAuMzA5LDAuMTE5LTAuNjE2LDAuMTc5LTAuOTQ2LDAuMjM2QzU0LjExOCw3MS4zNzcsNTMuNzIyLDcxLjQwOCw1My4yNTksNzEuNDA4TDUzLjI1OSw3MS40MDh6IiBmaWxsPSIjRkZGRkZGIi8+PHBhdGggZD0iTTcyLjM4OCw2My4xMDRjLTAuNTgzLTAuNDUtMS44NzktMC4zNTktMi4xNDgsMC41NjRMNjguOTYxLDcxLjJoLTIuNjY0bDEuOTE3LTExLjIzOGgyLjY2NGwtMC4wNTUsMC45MDcgICAgIGMwLjUwOS0wLjUwOSwxLjA3MS0wLjkzOSwyLjQ5OC0wLjg5NUM3My40MTIsNTkuOTc3LDcyLjQ1Nyw2MS42NDUsNzIuMzg4LDYzLjEwNEw3Mi4zODgsNjMuMTA0eiIgZmlsbD0iI0ZGRkZGRiIvPjxwYXRoIGQ9Ik03Ny40MjQsNzEuNWMtMS40NzgsMC0yLjY0Ni0wLjUwNy0zLjQzNi0xLjQ5NmMtMC44MTctMC45ODQtMS4yMTQtMi40MTktMS4yMTQtNC4yNzQgICAgIGMwLTEuNDY1LDAuMTc4LTIuNzgxLDAuNTI5LTMuOTc1YzAuMzUyLTEuMTk3LDAuODYtMi4yMSwxLjQ3NC0zLjA3OGMwLjYxOS0wLjgzNSwxLjM0OC0xLjQ5NCwyLjIwOC0xLjk3MSAgICAgYzAuODMxLTAuNDgsMS43MzgtMC43MTksMi42ODQtMC43MTljMC43NDgsMCwxLjQ1NywwLjEyLDIuMTE3LDAuMzNjMC4zMTksMC4xMDksMC45MzQsMC40MDEsMC45MzQsMC40MDFsLTAuNjE5LDMuNTQ0ICAgICBjLTAuMzA5LTAuMzkyLTAuNjE3LTAuNzAzLTAuOTMzLTAuOTI2Yy0wLjQ2NC0wLjI5OC0xLjAxNS0wLjQ4LTEuNjMzLTAuNDhjLTEuMTAyLDAtMi4wMDUsMC42LTIuNzEsMS43OTUgICAgIGMtMC43MjYsMS4xOTYtMS4wODEsMi43MjItMS4wODEsNC41NzRjMCwxLjE5NSwwLjIsMi4wNjQsMC41OTcsMi42YzAuMzk2LDAuNTA3LDAuOTY5LDAuNzc3LDEuNzIxLDAuNzc3ICAgICBjMC42ODEsMCwxLjMxOS0wLjE4MywxLjkxNy0wLjUzOGMwLjI4MS0wLjE4NiwwLjU1Ny0wLjM4MSwwLjgyOC0wLjYwM2wtMC42MjEsMy4zODJjMCwwLTAuMzIxLDAuMTU3LTAuNDc0LDAuMjEgICAgIGMtMC4zNzIsMC4xNDgtMC43MDIsMC4yMzgtMC45ODksMC4zMjZDNzguNDE1LDcxLjQzNiw3Ny45NzYsNzEuNSw3Ny40MjQsNzEuNUw3Ny40MjQsNzEuNXoiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJNMzcuOTU3LDcwLjgxYy0wLjEwOSwwLjA5MS0wLjIyMSwwLjE1LTAuMzA5LDAuMjFjLTAuMjg2LDAuMTUtMC41MjgsMC4yNjktMC43NzEsMC4zNTcgICAgIGMtMC4yNDIsMC4wNTktMC41NzMsMC4xMjMtMS4wMTQsMC4xMjNjLTAuNjg0LDAtMS4yNTYtMC4yNzEtMS42NzQtMC43NzhjLTAuNDQxLTAuNTQxLTAuNjYyLTEuMjI3LTAuNjYyLTIuMDYyICAgICBjMC0wLjg5NiwwLjE1My0xLjY0NSwwLjQ2NC0yLjI3MWMwLjMwOS0wLjYwMiwwLjc2OS0xLjExLDEuMzg4LTEuNDY3YzAuNTczLTAuMzU3LDEuMjU2LTAuNTk3LDIuMDI4LTAuNzQ3bDAuNTUtMC4wOTEgICAgIGMwLjYzOS0wLjExOSwxLjMwMS0wLjIwNywyLjAyOC0wLjI0YzAtMC4wNTksMC0wLjExOSwwLjAyMi0wLjIwOGMwLjAyMi0wLjA4OCwwLjAyMi0wLjE3OSwwLjAyMi0wLjI5OCAgICAgYzAtMC40NzgtMC4xNTUtMC44MDctMC40ODUtMS4wMTdjLTAuMzMxLTAuMTc4LTAuODE2LTAuMjY3LTEuNDU0LTAuMjY3aC0wLjEzM2MtMC4zOTcsMC4wMjktMC44MzcsMC4xMTktMS4zMjEsMC4yOTggICAgIGMtMC41MjksMC4yMS0wLjkyNywwLjM1OS0xLjE5MSwwLjUwOWgtMC4yNDJsMC4zOTctMi42NmMwLjMwOS0wLjExOSwwLjc5My0wLjIzOSwxLjQzMy0wLjM1OCAgICAgYzAuMzA4LTAuMDkxLDAuNjE2LTAuMTIsMC45MjUtMC4xNTFjMC4zMzItMC4wNiwwLjY4My0wLjA2LDEuMDE1LTAuMDZjMS4zMDEsMCwyLjI0NywwLjIzOSwyLjg2NCwwLjY4NyAgICAgYzAuNjE3LDAuNDUsMC45MDQsMS4xNjgsMC45MDQsMi4xNTJjMCwwLjEyMSwwLDAuMjk4LTAuMDIyLDAuNTFjLTAuMDIyLDAuMjEtMC4wNDUsMC4zOS0wLjA2NywwLjU2N0w0MS4zNTIsNzEuMmgtMi42NDYgICAgIGwwLjItMS4xOTdjLTAuMTU1LDAuMTUtMC4zNzUsMC4zMjktMC41OTYsMC41NEMzOC4xNzgsNzAuNjMxLDM4LjA2OCw3MC43MjIsMzcuOTU3LDcwLjgxTDM3Ljk1Nyw3MC44MXogTTM3Ljk1Nyw2Ni4xNSAgICAgYy0wLjI4NywwLjA2LTAuNTI4LDAuMTQ4LTAuNzI4LDAuMjRjLTAuMzA4LDAuMTQ3LTAuNTI5LDAuMzU1LTAuNjgyLDAuNjI2Yy0wLjE3NywwLjI3MS0wLjI0MywwLjYyOC0wLjI0MywxLjA3NiAgICAgYzAsMC4zOSwwLjExLDAuNjU3LDAuMzA4LDAuODA3YzAuMjIxLDAuMTQ4LDAuNTA4LDAuMjQsMC45MjYsMC4yNGMwLjEzMiwwLDAuMjY1LTAuMDI5LDAuNDE5LTAuMDkxICAgICBjMC4xMzMtMC4wMjgsMC4yNjYtMC4wODgsMC40Mi0wLjE0OGMwLjI4Ni0wLjE3OSwwLjU3MS0wLjM5LDAuODM2LTAuNjI3bDAuMzk3LTIuMzkxYy0wLjQ2MiwwLjA2LTAuOTI2LDAuMTIxLTEuMzIsMC4yMSAgICAgQzM4LjE3OCw2Ni4wOSwzOC4wNjgsNjYuMTE5LDM3Ljk1Nyw2Ni4xNUwzNy45NTcsNjYuMTV6IiBmaWxsPSIjRkZGRkZGIi8+PHBhdGggZD0iTTYxLjAwMyw2MS45MDRjLTAuMzUyLDAuMDYtMC42ODIsMC4yNC0wLjk0NiwwLjUzNmMtMC4zNzUsMC40MjEtMC42NjIsMC45NTktMC44NTksMS42NzZoMS44MDZoMS43ODYgICAgIGMwLTAuMTE5LDAuMDIyLTAuMjEsMC4wMjItMC4zMjljMC0wLjA4OCwwLjAyMi0wLjIwOCwwLjAyMi0wLjI5NmMwLTAuNTQxLTAuMTMzLTAuOTI4LTAuMzc2LTEuMjI5ICAgICBjLTAuMjQxLTAuMjY2LTAuNTcxLTAuNDE2LTEuMDM1LTAuNDE2QzYxLjI5LDYxLjg0NSw2MS4xMzYsNjEuODczLDYxLjAwMyw2MS45MDRMNjEuMDAzLDYxLjkwNHogTTYxLjAwMyw2OC45NTlINjEuNCAgICAgYzAuNTczLDAsMS4xMjQtMC4xMTksMS42NTMtMC4zOWMwLjUwNi0wLjI3MSwwLjk3LTAuNTY3LDEuMzQyLTAuODk2aDAuMzA5bC0wLjUwNiwyLjg5OGMtMC41MDYsMC4zMDMtMS4wNTgsMC41NC0xLjYyOSwwLjY5ICAgICBjLTAuNDg1LDAuMTQ4LTEuMDE1LDAuMjA5LTEuNTY2LDAuMjRoLTAuMjQxYy0xLjQzMiwwLTIuNTEzLTAuNDE5LTMuMjg0LTEuMjg2Yy0wLjc3LTAuODM4LTEuMTQ2LTIuMDAzLTEuMTQ2LTMuNDk2ICAgICBjMC0xLjAxNywwLjEzNC0xLjk3MiwwLjM3Ny0yLjgxMmMwLjI0MS0wLjg2NSwwLjYxNi0xLjYxNCwxLjA3OC0yLjI3MWMwLjQ2My0wLjYyNywxLjAxNS0xLjEwNCwxLjY5Ny0xLjQ5MyAgICAgYzAuNDg1LTAuMjM5LDAuOTkzLTAuNDE4LDEuNTIxLTAuNTA5YzAuMjQyLTAuMDI4LDAuNDg0LTAuMDI4LDAuNzI4LTAuMDI4YzEuMjM1LDAsMi4xNiwwLjMyNiwyLjc5OSwxLjAxNCAgICAgYzAuNjE2LDAuNjU5LDAuOTI3LDEuNjc0LDAuOTI3LDIuOTkxYzAsMC40NDgtMC4wMjIsMC44OTctMC4wODgsMS4zNDZjLTAuMDY3LDAuNDE2LTAuMTU1LDAuODY2LTAuMjY1LDEuMjgzaC00LjEwMWgtMi4wNzEgICAgIHYwLjExOXYwLjExOWMwLDAuNzc3LDAuMjIxLDEuMzc2LDAuNjE3LDEuODIyQzU5Ljg4MSw2OC42Niw2MC4zNjQsNjguODk4LDYxLjAwMyw2OC45NTlMNjEuMDAzLDY4Ljk1OXoiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBkPSJNODUuOTc1LDcwLjgxYy0wLjEwOSwwLjA5MS0wLjIyMSwwLjE1LTAuMzI5LDAuMjFjLTAuMjY0LDAuMTUtMC41MjcsMC4yNjktMC43NjksMC4zNTcgICAgIGMtMC4yNDMsMC4wNTktMC41NzYsMC4xMjMtMC45OTMsMC4xMjNjLTAuNzA3LDAtMS4yNTctMC4yNzEtMS42OTYtMC43NzhjLTAuNDQxLTAuNTQxLTAuNjQxLTEuMjI3LTAuNjQxLTIuMDYyICAgICBjMC0wLjg5NiwwLjE1My0xLjY0NSwwLjQ2Ni0yLjI3MWMwLjMwNy0wLjYwMiwwLjc2OS0xLjExLDEuMzY3LTEuNDY3YzAuNTcxLTAuMzU3LDEuMjU1LTAuNTk3LDIuMDQ2LTAuNzQ3ICAgICBjMC4xNzgtMC4wMzMsMC4zNTMtMC4wNiwwLjU1LTAuMDkxYzAuNjE5LTAuMTE5LDEuMzAzLTAuMjA3LDIuMDA4LTAuMjRjMC4wMjEtMC4wNTksMC4wMjEtMC4xMTksMC4wNDEtMC4yMDggICAgIGMwLTAuMDg4LDAuMDI0LTAuMTc5LDAuMDI0LTAuMjk4YzAtMC40NzgtMC4xNzQtMC44MDctMC40ODgtMS4wMTdjLTAuMzI5LTAuMTc4LTAuODE0LTAuMjY3LTEuNDUxLTAuMjY3aC0wLjEzNSAgICAgYy0wLjQxNywwLjAyOS0wLjg1NywwLjExOS0xLjMxOSwwLjI5OGMtMC41MzEsMC4yMS0wLjkyOCwwLjM1OS0xLjE5MSwwLjUwOWgtMC4yNDFsMC4zNzYtMi42NiAgICAgYzAuMzA5LTAuMTE5LDAuNzktMC4yMzksMS40NTMtMC4zNThjMC4zMDktMC4wOTEsMC42MTQtMC4xMiwwLjkyMi0wLjE1MWMwLjMzNS0wLjA2LDAuNjYtMC4wNiwxLjAxNS0wLjA2ICAgICBjMS4zMDIsMCwyLjI0NiwwLjIzOSwyLjg2NywwLjY4N2MwLjU5MywwLjQ1LDAuOTAyLDEuMTY4LDAuOTAyLDIuMTUyYzAsMC4xMjEsMCwwLjI5OC0wLjAyMSwwLjUxICAgICBjLTAuMDI0LDAuMjEtMC4wNDUsMC4zOS0wLjA3MSwwLjU2N0w4OS4zNjksNzEuMmgtMi42NDZsMC4yMDQtMS4xOTdjLTAuMTc5LDAuMTUtMC4zNzYsMC4zMjktMC42MTcsMC41NEw4NS45NzUsNzAuODEgICAgIEw4NS45NzUsNzAuODF6IE04NS45NzUsNjYuMTVjLTAuMjg0LDAuMDYtMC41MjYsMC4xNDgtMC43NDYsMC4yNGMtMC4yODUsMC4xNDctMC41MzEsMC4zNTUtMC42ODEsMC42MjYgICAgIGMtMC4xNTksMC4yNzEtMC4yNDYsMC42MjgtMC4yNDYsMS4wNzZjMCwwLjM5LDAuMTEyLDAuNjU3LDAuMzMzLDAuODA3YzAuMTk3LDAuMTQ4LDAuNTA3LDAuMjQsMC45MDQsMC4yNCAgICAgYzAuMTI5LDAsMC4yODgtMC4wMjksMC40MzgtMC4wOTFjMC4xMzUtMC4wMjgsMC4yNjctMC4wODgsMC4zOTctMC4xNDhjMC4zMDktMC4xNzksMC41NzItMC4zOSwwLjg0LTAuNjI3bDAuNDE3LTIuMzkxICAgICBjLTAuNDg0LDAuMDYtMC45MjYsMC4xMjEtMS4zNDUsMC4yMUM4Ni4xNzUsNjYuMDksODYuMDY2LDY2LjExOSw4NS45NzUsNjYuMTVMODUuOTc1LDY2LjE1eiIgZmlsbD0iI0ZGRkZGRiIvPjxwYXRoIGQ9Ik05Ny4yMjIsNjMuMTA0Yy0wLjU4My0wLjQ1LTEuODc5LTAuMzU5LTIuMTQ4LDAuNTY0TDkzLjc5Nyw3MS4yaC0yLjY2NWwxLjkxNy0xMS4yMzhoMi42NjRsLTAuMDU1LDAuOTA3ICAgICBjMC41MDUtMC41MDksMS4wNzEtMC45MzksMi41MDItMC44OTVDOTguMjQ2LDU5Ljk3Nyw5Ny4yOTEsNjEuNjQ1LDk3LjIyMiw2My4xMDRMOTcuMjIyLDYzLjEwNHoiIGZpbGw9IiNGRkZGRkYiLz48cGF0aCBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMDIuNDU4LDYyLjM1MmMtMC4xMzMsMC4wNi0wLjI2MiwwLjE1Mi0wLjM3NCwwLjI0ICAgICBjLTAuMzU1LDAuMjM4LTAuNjQsMC42LTAuODgxLDEuMDE3Yy0wLjIsMC40MTYtMC4zNzYsMC44OTctMC40ODQsMS41MjRjLTAuMTM1LDAuNTk3LTAuMiwxLjE5Ny0wLjIsMS43NjQgICAgIGMwLDAuNjg4LDAuMTMzLDEuMTY1LDAuMzUsMS40NjJjMC4yNDcsMC4zMjksMC41OTcsMC40ODEsMS4wNiwwLjQ4MWMwLjE3OSwwLDAuMzU1LTAuMDMzLDAuNTI5LTAuMTIxICAgICBjMC4wODgtMC4wMzEsMC4xNTUtMC4wNTksMC4yNDMtMC4xMTljMC4yNjQtMC4xNSwwLjUwNS0wLjMwMiwwLjc0OC0wLjUwOWwwLjk0Ny01LjUyOWMtMC4xNTMtMC4wOTEtMC4zMjktMC4xODMtMC41NzEtMC4yNDEgICAgIGMtMC4yMjItMC4wODgtMC40MTktMC4xMTctMC41OTgtMC4xMTdDMTAyLjk0Miw2Mi4yMDQsMTAyLjcwMSw2Mi4yNjEsMTAyLjQ1OCw2Mi4zNTJMMTAyLjQ1OCw2Mi4zNTJ6IE0xMDIuNDU4LDcwLjYwMyAgICAgYy0wLjIsMC4xNzktMC40MjEsMC4zNTctMC42NjIsMC41MDdjLTAuMjE5LDAuMTE5LTAuNDQsMC4yMzgtMC42MzYsMC4yOThjLTAuMjI0LDAuMDYtMC40ODgsMC4wOTEtMC43NzIsMC4wOTEgICAgIGMtMC44MTcsMC0xLjQ1Ny0wLjM2LTEuOTQxLTEuMDQ4Yy0wLjQ2Mi0wLjcxNi0wLjcwNS0xLjczMy0wLjcwNS0zLjAxOWMwLTEuMDc2LDAuMTA5LTIuMDkzLDAuMzc2LTMuMDE5ICAgICBjMC4yNDItMC45MjQsMC41OTMtMS43NjQsMS4wMzYtMi40NzdjMC40NDEtMC43MiwwLjk0Ni0xLjI1OSwxLjUzOS0xLjY3N2MwLjU3Ni0wLjM5LDEuMTQ4LTAuNTk3LDEuNzY1LTAuNjI4aDAuMDg4ICAgICBjMC40NiwwLDAuODYsMC4wNiwxLjE5MSwwLjE3OWMwLjMyOSwwLjExOSwwLjY4NCwwLjMzLDEuMDM1LDAuNTk5bDAuNTkzLTMuOTE5aDIuNjY1TDEwNS41ODcsNzEuMmgtMi42NjVsMC4xOTYtMS4xNjUgICAgIEMxMDIuODc3LDcwLjI0MSwxMDIuNjU1LDcwLjQyNCwxMDIuNDU4LDcwLjYwM0wxMDIuNDU4LDcwLjYwM3oiIGZpbGw9IiNGRkZGRkYiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvZz48L2c+PC9nPjwvc3ZnPg==" height="100%">');
                break;
               case 'American Express':
                $('#card-image').html('<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGlkPSLQodC70L7QuV8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48Zz48cGF0aCBkPSJNMTE3Ljg4NiwxMDMuMDU1SDEwLjExNEM1LjYzMywxMDMuMDU1LDIsOTkuNDIyLDIsOTQuOTQxVjMzLjA1OWMwLTQuNDgxLDMuNjMzLTguMTE0LDguMTE0LTguMTE0aDEwNy43NzEgICBjNC40ODEsMCw4LjExNCwzLjYzMyw4LjExNCw4LjExNHY2MS44ODFDMTI2LDk5LjQyMiwxMjIuMzY3LDEwMy4wNTUsMTE3Ljg4NiwxMDMuMDU1eiIgZmlsbD0iIzY1QzhDRSIvPjxnPjxnPjxwb2x5Z29uIGZpbGw9IiNGRkZGRkYiIHBvaW50cz0iNzUuODYsNTguNTg0IDc1Ljg2LDYxLjk2MiA4NS41NDMsNjEuOTYyIDg1LjU0Myw2NS43MjQgNzUuODYsNjUuNzI0IDc1Ljg2LDY5LjQxNiAgICAgIDg2LjcyNyw2OS40MTYgOTEuNzc4LDYzLjk4MyA4Ni45MzYsNTguNTg0ICAgICIvPjxwb2x5Z29uIGZpbGw9IiNGRkZGRkYiIHBvaW50cz0iMjguMDcyLDY1LjI3MSAzNC4xMzIsNjUuMjcxIDMxLjEwMiw1Ny44ODcgICAgIi8+PHBhdGggZD0iTTExNCw1MS4wOTVIOTguMzYxbC0zLjY1NywzLjkzNmwtMy40MTMtMy45MzZINTcuNjQzbC0yLjg5MSw2LjY1M2wtMi45NjEtNi42NTNoLTEzLjQ4djMuMDNsLTEuNDk4LTMuMDMgICAgIGwtMTEuNTI5LDBMMTQsNzYuODdoMTMuNTE0bDEuNjcyLTQuMTFoMy44MzFsMS42NzIsNC4xMWgxNC44NzN2LTMuMTM1bDEuMzI0LDMuMTM1aDcuNjk4bDEuMzI0LTMuMjA0djMuMjA0aDMwLjkzbDMuNzYyLTQuMDA2ICAgICBsMy41MTgsNC4wMDZMMTE0LDc2LjkwNWwtMTEuMzItMTIuODUzTDExNCw1MS4wOTV6IE02Ny40NjYsNzMuMjQ4aC00LjM4OWwwLTE0LjQ5bC02LjM3NCwxNC40OWgtMy45MDFsLTYuNDA5LTE0LjQ5djE0LjQ5ICAgICBoLTguOTg2TDM1LjcsNjkuMTAzaC05LjE5NWwtMS43MDcsNC4xNDVoLTQuODA3bDcuOTA3LTE4LjQ5NWg2LjU4M2w3LjQ4OSwxNy40ODVWNTQuNzUyaDcuMjFsNS43ODIsMTIuNTM5bDUuMzI5LTEyLjUzOWg3LjE3NSAgICAgVjczLjI0OHogTTEwNS43MSw3My4yNDhoLTUuNjc3bC01LjQzNC02LjEzbC01LjY0Myw2LjEzSDcxLjQ3MVY1NC43NTJoMTcuNzY0bDUuNDM0LDYuMDYxbDUuNjA4LTYuMDYxaDUuNDM0bC04LjI1NSw5LjMgICAgIEwxMDUuNzEsNzMuMjQ4eiIgZmlsbD0iI0ZGRkZGRiIvPjwvZz48L2c+PC9nPjwvc3ZnPg==" height="100%">');
                break;
        }
    }

    // check card type on card number input blur 
    $('#card-number').blur(function (event) {
        event.preventDefault();
        checkCardType();
    });

    // on button click: 
    $('#card-btn').click(function (event) {

        // get each input value and use Stripe to determine whether they are valid
        var cardNumber = $('#card-number').val();
        var isValidNo = Stripe.card.validateCardNumber(cardNumber);
        var expMonth = $('#card-month').val();
        var expYear = $('#card-year').val();
        var isValidExpiry = Stripe.card.validateExpiry(expMonth, expYear);
        var cardCVC = $('#card-cvc').val();
        var isValidCVC = Stripe.card.validateCVC(cardCVC);
        var cardHolder = $('#card-holder').val();
        event.preventDefault();

        // alert the user if any fields are missing
        if (!cardNumber || !cardCVC || !cardHolder || !expMonth || !expYear) {
            console.log(cardNumber + cardCVC + cardHolder + cardMonth + cardYear);
            $('#form-errors').addClass('hidden');
            $('#card-success').addClass('hidden');
            $('#form-errors').removeClass('hidden');
            $('#card-error').text('Please complete all fields.');
            findEmpty();
        } else {

            // alert the user if any fields are invalid
            if (!isValidNo || !isValidExpiry || !isValidCVC) {
                $('#form-errors').css('display', 'block');
                if (!isValidNo) {
                    $('#card-error').text('Invalid credit card number.');
                } else if (!isValidExpiry) {
                    $('#card-error').text('Invalid expiration date.')
                } else if (!isValidCVC) {
                    $('#card-error').text('Invalid CVC code.')
                }

            } else {
                $('#card-success').removeClass('hidden');
            }
        }
    })

});
</script>
</head>
<body>

<div id="form-container" style="margin-top: 230px;">

  <div id="card-front">
    <div id="shadow"></div>
    <div id="image-container">
      
      <span id="card-image">
      
        </span>
    </div>
    <!--- end card image container --->

    <label for="card-number">
        Card Number
      </label>
    <input type="text" id="card-number" placeholder="1234 5678 9101 1112" length="16">
    <div id="cardholder-container">
      <label for="card-holder">Card Holder
      </label>
      <input type="text" id="card-holder" placeholder="e.g. John Doe" />
    </div>
    <!--- end card holder container --->
    <div id="exp-container">
      <label for="card-exp">
          Expiration
        </label>
      <input id="card-month" type="text" placeholder="MM" length="2">
      <input id="card-year" type="text" placeholder="YY" length="2">
    </div>
        <div id="cvc-container">
      <label for="card-cvc"> CVC/CVV</label>
      <input id="card-cvc" placeholder="XXX-X" type="text" min-length="3" max-length="4">
      <p>Last 3 or 4 digits</p>
    </div>
    <!--- end CVC container --->
    <!--- end exp container --->
  </div>
  <!--- end card front --->
  <div id="card-back">
    <div id="card-stripe">
    </div>

  </div>
  <!--- end card back --->
  <input type="text"  >
  <a href="pay.php"><button type="button" id="card-btn" onclick="validation()">Submit</button></a>

</div>
<!--- end form container --->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://use.fontawesome.com/f1e0bf0cbc.js"></script>
</body>
</html>