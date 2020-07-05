import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import LineTo from 'react-lineto';
import Draggable from 'react-draggable'; // The default;
import ResizableRect from 'react-resizable-rotatable-draggable';
import ClickNHold from 'react-click-n-hold';

export default class Testrotate extends Component {
  constructor(){
    super();
    //console.log(super());
    this.state = {
      width: 100,
      height: 100,
      top: 100,
      left: 100,
      rotateAngle: 0,
      ro:0,
      ro2:0,
      width:170,
      height:150,
      width2:170,
      height2:150,
      fromchr:'',
      tochr:'',
      borderclr:'',
      activeDrags: 0,
      selectedcharactor1:"0",
      selectedcharactor2: "00",

      deltaPosition: {
        x: 0, y: 0
      },
      arr:[{ "ch_id":1,
            "class_name":'ch1',
            "ch_type_id":1,
            "user_id":1,
            "rep_id":1,
            "ch_name":1,
            "ch_width":90,
            "ch_hieght":150,
            "ch_rotate":1,
            "user_ch":1,
            "ch_position":1,
          }]
    }
    this.handleResize = this.handleResize.bind(this);
    this.handleRotate = this.handleRotate.bind(this);
    this.handleDrag = this.handleDrag.bind(this);
    this.rotate = this.rotate.bind(this);
    this.rela = this.rela.bind(this);
    this.rela2 = this.rela2.bind(this);
    this.positiverel = this.positiverel.bind(this);
    this.negativerel = this.negativerel.bind(this);
    this.addMch = this.addMch.bind(this);
    this.addWch = this.addWch.bind(this);

    this.onStart = this.onStart.bind(this);
    this.onStop = this.onStop.bind(this);
    this.clickStart = this.clickStart.bind(this);
    this.clickStop = this.clickStop.bind(this);
    this.handleDrag = this.handleDrag.bind(this);
    this.showadd = this.showadd.bind(this);
    this.clickNHold = this.clickNHold.bind(this);
    this.delrela = this.delrela.bind(this);


  }


  handleResize  (style, isShiftKey, type)  {
    // type is a string and it shows which resize-handler you clicked
    // e.g. if you clicked top-right handler, then type is 'tr'
    let { top, left, width, height } = style
    top = Math.round(top)
    left = Math.round(left)
    width = Math.round(width)
    height = Math.round(height)
    this.setState({
      top,
      left,
      width,
      height,
      ro:0

    })
  }

  handleRotate  (rotateAngle) {
    this.setState({
      rotateAngle
    })
  }

  handleDrag (deltaX, deltaY) {
    this.setState({
      left: this.state.left + deltaX,
      top: this.state.top + deltaY
    })
  }
  rotate(){


    let objIndex = this.state.arr.findIndex((obj => obj.ch_id == this.state.selectedcharactor1));

    //Log object to Console.
    console.log("Before update: ", this.state.arr[objIndex])

    //Update object's name property.
    this.state.arr[objIndex].ch_rotate += 20

    //Log object to console again.
    console.log("After update: ", this.state.arr[objIndex])
    //this.setState({arr:newarr})

  }

  eventLogger  (e: MouseEvent, data: Object)  {
    console.log('Event: ', e);
    console.log('Data: ', data);
  };
  rela(e){
        this.setState({selectedcharactor1:e.ch_id})
    console.log(e.ch_id)

  /*  var found = this.state.arr.find(function (arr) {
        return arr.ch_id == e;
      });
      console.log(found)
    this.setState({
      fromchr:'handle',
      width:Number(this.state.width)+120,
      height:Number(this.state.height)+100

    })*/
  }
  rela2(){
    this.setState({
      width2:Number(this.state.width2)+120,
      height2:Number(this.state.height2)+100

    })
  }
  positiverel(){

    this.setState({
      tochr:'ch2',
      borderclr:'blue',
    })
  }
  negativerel(){

    this.setState({
      tochr:'ch2',
      borderclr:'red',

    })
  }
  delrela(){
    this.setState({
      tochr:'',
    })
  }
  addMch(){

    this.state.arr.push({
                            "ch_id":2,
                            "class_name":"ch2",
                            "ch_type_id":1,
                            "user_id":1,
                            "rep_id":1,
                            "ch_name":1,
                            "ch_width":90,
                            "ch_hieght":150,
                            "ch_rotate":1,
                            "ch_position":1,
                            "user_ch":1,
                        })
                        this.setState({
                            arr:this.state.arr,

                          })

  }
  addWch(){
     this.state.arr.push({
                            "ch_id":3,
                            "ch_type_id":2,
                            "user_id":1,
                            "rep_id":1,
                            "ch_name":1,
                            "ch_width":120,
                            "ch_hieght":150,
                            "ch_rotate":1,
                            "ch_position":1,
                            "user_ch":1,
    })
    this.setState({
        arr:this.state.arr,

      })
  }
  Imageshow(data){
    let styles = {
        transform: `rotate(${data.ch_rotate}deg)`,

    };
    if(data.ch_type_id == 1){
        return  <img   className={data.class_name} width={data.ch_width} height={data.ch_height} style={styles} src="http://localhost:8000/img/people.png"/>
    }
    else{
        return  <img   className={data.class_name} width={data.ch_width} height={data.ch_height} style={styles} src="http://localhost:8000/img/people.png"/>

    }
  }
  onStart  () {
    this.setState({activeDrags: ++this.state.activeDrags});
  };

  onStop (){
    this.setState({activeDrags: --this.state.activeDrags});
  };
  handleDrag (e, ui){
    const {x, y} = this.state.deltaPosition;
    this.setState({
      deltaPosition: {
        x: x + ui.deltaX,
        y: y + ui.deltaY,
      }
    });
  };
  showadd(){
    console.log("Yess")
  }
  clickStart(e){
    console.log('START');
}

    clickStop(e, enough){
    console.log('END');
    console.log(enough ? 'Click released after enough time': 'Click released too soon');
}

	clickNHold(e){
		console.log('CLICK AND HOLD');
	}
    render() {
        const dragHandlers = {onStart: this.onStart, onStop: this.onStop};

      const {width, top, left, height, rotateAngle} = this.state
      const x = 500;
      const y = 100;
      const {deltaPosition} = this.state;

     /* const styles = {
          transform: `translate(${x}px, ${y}px)`
      };*/

      const styles = {
          transform: `rotate(${this.state.ro}deg)`,

      };
      const styles2 = {
        transform: `rotate(${this.state.ro2}deg)`,

    };
      return (
          <div style={{fontSize:'18px'}}>
        <div style={{width:'200px',height:'350px',float:'left',borderRadius: '25px'}} className="container">

            <div class="card">
            <div class="card-header" style={{backgroundColor:'#2196F3',color:'white',textAlign:'center'}}>
                Icon
            </div>
                <div class="card-body">
                    <div style={{textAlign:'center'}}> <img   className=""  style={{width:'70px'}} src="http://localhost:8000/img/peopleadd.png"/></div>
                        <br/>
                    <div  style={{borderBottom:'solid silver 1px',height:'50px'}}>
                        <div style={{float:'left'}}>
                            <button onClick={this.addMch} style={{backgroundColor:'#2196F3',color:'white'}} class="button5"><i class="fa fa-plus"></i></button>
                        </div>
                        <div style={{float:'right'}}>

                        <button onClick={this.rotate} style={{backgroundColor:'red',color:'white'}} class="button5"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <br/>


                    <div style={{width:"100%",textAlign:'center'}}>

                    <button onClick={this.rotate} class="btn" ><img   className=""  style={{width:'40px'}} src="http://localhost:8000/img/rotate.png"/></button>
                    </div>
                  </div>
                </div>
        <br/>
                <div class="card">
            <div class="card-header" style={{backgroundColor:'#2196F3',color:'white',textAlign:'center'}}>
                Line
            </div>
                <div class="card-body">
                    <div  style={{textAlign:'center'}}>
                        <div >
                            <button onClick={this.positiverel} style={{backgroundColor:'#2196F3',color:'white'}} class="button5"><i class="fa fa-plus"></i></button>
                        </div>
                        <br/>
                        <div >

                        <button onClick={this.negativerel} style={{backgroundColor:'red',color:'white'}} class="button5"><i class="fa fa-minus"></i></button>
                        </div>
                        <br/>
                        <div >

                        <button onClick={this.delrela} style={{backgroundColor:'red',color:'white'}} class="button5"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <br/>

                  </div>
                </div>
        </div>
        <div style={{border:'solid silver',width:'900px',height:'600px',float:'right',borderRadius: '25px'}} className="container">
            {this.state.arr.map(data =>


                <div style={{width:'10px'}} width="10px" >

                 <Draggable
                    //axis="x"
                    //handle=".handle"
                    defaultPosition={{x: 0, y: 0}}
                    position={null}
                    grid={[25, 25]}
                    scale={1}
                    onDrag={this.handleDrag}
                    onStart={this.onStart}
                    onStop={this.onStop}
                    >
                    <div>
                <div onDoubleClick={e => this.rela(data)} >
                            {this.Imageshow(data)}
                            </div>

                     </div>
                </Draggable>
                </div>

      )}

      <Draggable
      //onDrag={this.handleDrag}
      onStart={this.onStart}
      onStop={this.onStop}
      >
          <div >
          </div>
        </Draggable>
      <br/>
      <LineTo borderWidth="5px" from="ch1" to={this.state.tochr} borderColor={this.state.borderclr}/>

        </div>
        </div>
      )
    }
  }

if (document.getElementById('testrotate')) {
    ReactDOM.render(<Testrotate />, document.getElementById('testrotate'));
}
