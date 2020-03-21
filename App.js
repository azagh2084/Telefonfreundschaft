import React, { Component } from 'react';
import TextField from '@material-ui/core/TextField'
import { makeStyles } from '@material-ui/core/styles';

class App extends Component{

    constructor(props){
        super(props);
    }

   render(){
      return(
            <form noValidate autoComplete="off">
                <TextField id="standard-basic" label="Standard" />
                <TextField id="filled-basic" label="Filled" variant="filled" />
                <TextField id="outlined-basic" label="Outlined" variant="outlined" />
            </form>
      );
   }
}
export default App;