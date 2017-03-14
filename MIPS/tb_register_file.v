`timescale 1ns / 1ps


module tb_register_file();

   reg									 clk;
	reg								  reset;
	reg [4:0] 					read_addrA;
	reg [4:0] 					read_addrB;
	reg [31:0]					 write_reg;
	reg								  we_in;
	reg [31:0]	 				write_data;
	
	wire [31:0]				readdata_outA;
	wire [31:0]				readdata_outB;

   // The design under test is our register_file
   register_file dut (   
		.clk(clk),
		.reset(reset),
		.read_addrA(read_addrA),
		.read_addrB(read_addrB),
		.write_reg(write_reg),
		.we_in(we_in),
		.write_data(write_data),
		
		.readdata_outA(readdata_outA),
		.readdata_outB(readdata_outB)
 );
 
  initial
     begin
        clk = 0;
        forever #10 clk = !clk;
     end
	  

	  
	initial
     begin //reset
        read_addrA = 5'b00000;
        read_addrB = 5'b00000;
		  reset = 0;
		  write_reg = 0;
		  we_in = 0;
		  write_data = 0;
		  @(negedge clk);
		  read_addrA = 5'b00001;
        read_addrB = 5'b00000;
		  write_reg = 1;
		  we_in = 1;
		  write_data = 10;
		  
		  
     end // initial begin
	  
endmodule

