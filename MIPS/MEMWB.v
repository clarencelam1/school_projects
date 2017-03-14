module MEMWB
(
	input clk,
	input reg_write_out,
	input [31:0] write_register_data,
	input [4:0] write_register_destination,

	output reg stage4_reg_write_out,
	output reg [31:0] stage4_write_register_data,
	output reg [4:0] stage4_write_register_destination
	

);

always @ (posedge clk)
begin

	stage4_reg_write_out <= reg_write_out;
	stage4_write_register_data <= write_register_data;
	stage4_write_register_destination <= write_register_destination;
	
	
end


endmodule