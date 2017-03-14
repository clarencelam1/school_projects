`timescale 1ns / 1ps



module register_file (
	
	input									 clk,
	input								  reset,
	input [4:0] 				read_addrA,
	input [4:0] 				read_addrB,
	input [4:0]				    write_reg,
	input								  we_in,
	input	[31:0] 				write_data,
	
	
	output	reg [31:0]	readdata_outA,
	output	reg [31:0]	readdata_outB
	
);



reg [31:0] regfile [0:31] ;

always@(*)
	begin
		readdata_outA <= regfile[read_addrA];
		readdata_outB <= regfile[read_addrB];
	end
always @(posedge clk)

	begin
		if(reset)
		
			begin
				regfile[0] <= 0;
				regfile[1] <= 0;
				regfile[2] <= 0;
				regfile[3] <= 0;
				regfile[4] <= 0;
				regfile[5] <= 0;
				regfile[6] <= 0;
				regfile[7] <= 0;
				regfile[8] <= 0;
				regfile[9] <= 0;
				regfile[10] <= 0;
				regfile[11] <= 0;
				regfile[12] <= 0;
				regfile[13] <= 0;
				regfile[14] <= 0;
				regfile[15] <= 0;
				regfile[16] <= 0;
				regfile[17] <= 0;
				regfile[18] <= 0;
				regfile[19] <= 0;
				regfile[20] <= 0;
				regfile[21] <= 0;
				regfile[22] <= 0;
				regfile[23] <= 0;
				regfile[24] <= 0;
				regfile[25] <= 0;
				regfile[26] <= 0;
				regfile[27] <= 0;
				regfile[28] <= 0;
				regfile[29] <= 0;
				regfile[30] <= 0;
				regfile[31] <= 0;
			end
			
		else
			begin
				if(we_in)
				begin
					regfile[write_reg] <= ((write_reg != 32'b00000000000000000000000000000000)) ? write_data : 32'b00000000000000000000000000000000;
				end	
			end
		end

endmodule