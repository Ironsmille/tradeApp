var app = angular.module('main', ['ngResource']);
app.config(['$resourceProvider', function($resourceProvider) {
  // Don't strip trailing slashes from calculated URLs
  $resourceProvider.defaults.stripTrailingSlashes = false;
}]);
app.controller('watchlistController', ['$scope', '$resource', function($scope, $resource){
	console.log('t');
	var tickerFactory = $resource('/app_dev.php/watchlist', null, {
		 'getAll': {method: 'GET'},
		 'saveItem': {method:'POST'}
	});
	var createTicker = $resource("/app_dev.php/watchlist/create", null, {
		'saveTicker':{method:'POST'}
	})
	$scope.tickers = [];
	$scope.createTicker = function(){
		console.log('create');
        var ticker = {
        	edit: true,
            ticker: '',
            name_ticker: '',
            currency: 'EURO',
            trade: '',
            last_price_cur: 0.0,
            purchase_contract: 0,
            purchase_investment: 0,
            purchase_amount: 0,
            optimistic_price_cur: 0.0,
            optimistic_profit: 0,
            optimistic_profit_percent: 0.0,
            realistic_price_cur: 0.0,
            realistic_profit: 0,
            realistic_profit_percent: 0.0,
            stop_price_cur: 0.0,
            stop_profit: 0,
            stop_profit_percent: 0.0,
            ma21: '',
            ma200: '',
            trend: '',
            macd: '',
            rci: '',
            recomendation: '',
            status: ''

        };
        $scope.tickers.unshift(ticker);
	};

	$scope.save = function(ticker){
        ticker.edit = false;
        createTicker.saveTicker({'ticker':ticker}, function(res){
             console.log(res);
        });
	}
}]);